<?php

namespace Modules\Admin\Http\Controllers;

use App\Product;
use App\Trademark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Http\Requests\TradeRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(ProductRequest $request, $id)
    {
        $pro_esists = Product::find($id);
        $pro = $request->all();
        $fileName = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move('modules/admin/dist/img/', $fileName);
        unlink("modules/admin/dist/img/" . $pro_esists['picture']);
        $pro['picture'] = $fileName;
        $pro['updated_at'] = now();
        unset($pro['_token']);
        DB::table('products')->where('id', $id)->update($pro);
        return redirect('admin/prolist');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);
        $pro->delete();

        return redirect('admin/prolist');
    }

    public function getpro()
    {
        if (Auth::check()) {
            $pro = Product::query()->get()->toArray();
            $pro = json_decode(json_encode($pro), 1);

            $name = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "products" ORDER BY ORDINAL_POSITION');
            $name = json_decode(json_encode($name), 1);

            return view('admin::danhsach', ['base' => $pro, 'column' => $name, 'table' => 'product']);
        } else {
            return view('admin::login');
        }
    }

    public function getedit($id)
    {
        $pro = Product::find($id);
        $pro = json_decode(json_encode($pro), 1);
        return view('admin::proregist', ['pro' => $pro]);
    }

    public function regist(ProductRequest $request)
    {
        $pro = $request->all();
        $fileName = $request->file('picture')->getClientOriginalName();
        $pro['picture'] = $fileName;
        $request->file('picture')->move('modules/admin/dist/img/', $fileName);
        $pro['created_at'] = now();
        unset($pro['_token']);
        $pro_esist = Trademark::where('name', $pro['name'])->get()->toArray();
        if ($pro_esist != null) {
            return redirect()->back()->with('status', 'Da ton tai');
        } else {
            DB::table('products')->insert($pro);
            return redirect('admin/prolist');
        }
    }
}
