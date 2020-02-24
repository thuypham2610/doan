<?php

namespace Modules\Blog\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

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
        Cart::add(['id'=>$request->id,'name'=>$request->name,'quantity'=>$request->quantity,'price'=>$request->price]);
        $content = Cart::getContent()->toArray();
        return redirect()->back();
    }

    public function getDetailCart()
    {
        if(isset($_GET["id"])&&isset($_GET["quantity"]))
        {
            $id = $_GET["id"];
            $qty = $_GET["quantity"];
            Cart::update($id, $qty);
        }
        return view('pages.cart');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('blog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
