<?php

namespace Modules\Blog\Http\Controllers;

use App\Order;
use App\Order_detail;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('blog::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $pro = $request->all();
        unset($pro['_token']);
        $image = Product::query()->select('picture')->where('id', $pro['id'])->first()->toArray();
        $add = Cart::add([
            'id'    => $request->id, 'name' => $request->name, 'quantity' => $request->quantity,
            'price' => $request->price, 'picture' => $image['picture'], 'value' => 0
        ]);
        if ($add) {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Cart::remove($id);
        return redirect('/blog/detail');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function pay(Request $request)
    {
        $total = 0;
        $cart = Cart::getContent()->toArray();
        foreach ($cart as $key => $item) {
            if (isset($item['value']))
                $total += $item['price'] * $item['value'];
            else
                $total += $item['price'] * $item['quantity'];
        }
        if (Auth::check()) {
            Order::create([
                'user_id'     => Auth::user()->id,
                'total_price' => $total,
                'email'       => $request['email'],
                'addresss'    => $request['address'] . $request['city'],
                'status'      => 0,
                'phone'       => $request['phone']
            ]);
            $id = Order::query()->max('id');
            foreach ($cart as $item) {
                if (isset($item['value'])) {
                    $qty = $item['value'];
                } else {
                    $qty = $item['quantity'];
                }
                Order_detail::create([
                    'order_id'   => $id,
                    'product_id' => $item['id'],
                    'price'      => $item['price'],
                    'quantity'   => $qty
                ]);

                $product = json_decode(json_encode(Db::table('products')->select('quantity')->where('id', $key)->first()), 1);
                $p = $product['quantity'] - $qty;
                $product = [
                    'quantity' => $p
                ];
                DB::table('products')->where('id', $item['id'])->update($product);
            }
            Cart::clear();
        } else {
            Order::create([
                'user_id'     => 0,
                'total_price' => $total,
                'email'       => $request['email'],
                'addresss'    => $request['address'],
                'status'      => 0,
                'phone'       => $request['phone']
            ]);
            $id = Order::query()->max('id');
            foreach ($cart as $item) {
                if (isset($item['value'])) {
                    $qty = $item['value'];
                } else {
                    $qty = $item['quantity'];
                }
                Order_detail::create([
                    'order_id'   => $id,
                    'product_id' => $item['id'],
                    'price'      => $item['price'],
                    'quantity'   => $qty
                ]);
                $product = json_decode(json_encode(DB::table('products')->select('quantity')->where('id', $item['id'])->first()), 1);
                $product = $product['quantity'] - $qty;
                DB::table('products')->where('id', $item['id'])->update(['quantity' => $product]);
            }
            Cart::clear();
        }

        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id, $qty)
    {
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request)
    {
        $pro = DB::select('select * from products where id = ?', [$request['id']]);
        $pro = json_decode(json_encode($pro),1);
        if($request['quantity'] <= $pro[0]['quantity']){
            Cart::update($request['id'], array(
                'relative' => false,
                'value'    => $request['quantity']
            ));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
