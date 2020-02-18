<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
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
        //
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

    public function getdanhsach()
    {
        $producttab = DB::table('products')
            ->select('products.name', 'products.picture','products.price')
            ->join('doan.categories', 'products.cate_id', '=', 'doan.categories.id')
            ->where('doan.categories.name','Máy tính bảng')->limit(3)
            ->get();
        $producttab = json_decode(json_encode($producttab),1);

        $productdesk = DB::table('products')
            ->select('products.name', 'products.picture','products.price')
            ->join('doan.categories', 'products.cate_id', '=', 'doan.categories.id')
            ->where('doan.categories.name','Desktop')->limit(3)
            ->get();
        $productdesk = json_decode(json_encode($productdesk),1);

        $productlap = DB::table('products')
            ->select('products.name', 'products.picture','products.price')
            ->join('doan.categories', 'products.cate_id', '=', 'doan.categories.id')
            ->where('doan.categories.name','Laptop')->limit(3)
            ->get();
        $productlap = json_decode(json_encode($productlap),1);

        $newproduct = DB::table('products')
            ->orderBy('created_at')
            ->limit(4)
            ->get();
        $newproduct = json_decode(json_encode($newproduct),1);

        return view('blog::index',['producttab'=>$producttab,'productdesk'=>$productdesk,'productlap'=>$productlap,'newproduct'=>$newproduct]);
    }
}
