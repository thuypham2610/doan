<?php

namespace Modules\Admin\Http\Controllers;

use App\Product;
use App\Trademark;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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
    public function update(Request $request, $id)
    {
        $pro_esists = Product::find($id);
        $request->validate(
            [
                'name' => ['required', 'string',Rule::unique('products')->whereNotIn('name',[$pro_esists['name']])],
                'quantity'     => ['required', 'numeric'],
                'price'        => ['required', 'numeric'],
                'picture'      => ['required'],
                'description'  => ['required', 'string'],
            ]);
        $pro = $request->all();
        if (file_exists('modules/admin/dist/img/'. $pro_esists['picture'])) {
            $temp = explode(".", $_FILES["picture"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $request->file('picture')->move('modules/admin/dist/img/', $newfilename);
            unlink("modules/admin/dist/img/" . $pro_esists['picture']);
            $pro['picture'] = $newfilename;
            $pro['updated_at'] = now();
            unset($pro['_token']);
            DB::table('products')->where('id', $id)->update($pro);
            return redirect('admin/prolist');
        }else{
            $temp = explode(".", $_FILES["picture"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $request->file('picture')->move('modules/admin/dist/img/', $newfilename);
            $pro['picture'] = $newfilename;
            $pro['updated_at'] = now();
            unset($pro['_token']);
            DB::table('products')->where('id', $id)->update($pro);
            return redirect('admin/prolist');
        }

        return redirect()->back();
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
            $base = Product::paginate(5);

            $column = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "products" ORDER BY ORDINAL_POSITION');

            $table = 'product';
            return view('admin::danhsach', compact('base','column','table'));
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
        $temp = explode(".", $_FILES["picture"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $pro['picture'] = $newfilename;
        $request->file('picture')->move('modules/admin/dist/img/', $newfilename);
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
