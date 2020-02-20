<?php

namespace Modules\Admin\Http\Controllers;

use App\Category;
use App\Product;
use App\Trademark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Http\Requests\CateRequest;
use Modules\Admin\Http\Requests\TradeRequest;

class CategoryController extends Controller
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
    public function update(CateRequest $request, $id)
    {
        $cate = $request->all();
        unset($cate['_token']);
        DB::table('categories')->where('id',$id)->update($cate);
        return redirect('admin/catelist');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();

        return redirect('admin/catelist');
    }

    public function getcate()
    {
        if (Auth::check()) {
            $cate = Category::query()->get()->toArray();
            $cate = json_decode(json_encode($cate), 1);

            $name = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "categories" ORDER BY ORDINAL_POSITION');
            $name = json_decode(json_encode($name), 1);

            return view('admin::danhsach', ['base' => $cate, 'column' => $name,'table'=>'category']);
        }else{
            return view('admin::login');
        }
    }

    public function getedit($id)
    {
        $cate = Category::find($id);
        $cate = json_decode(json_encode($cate), 1);
        return view('admin::cateregist',['cate'=>$cate]);
    }

    public function regist(CateRequest $request)
    {
        $cate = ['name'=>$request->name];
        $cate_esist = Category::where('name', $cate['name'])->get()->toArray();
        if ($cate_esist != null) {
            return redirect()->back()->with('status', 'Da ton tai');
        } else {
            DB::table('categories')->insert($cate);
            return redirect('admin/catelist');
        }
    }
}
