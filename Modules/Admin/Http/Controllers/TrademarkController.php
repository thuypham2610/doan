<?php

namespace Modules\Admin\Http\Controllers;

use App\Trademark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrademarkController extends Controller
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


    public function gettrade()
    {
        if (Auth::check()) {
            $trade = Trademark::query()->get()->toArray();
            $trade = json_decode(json_encode($trade), 1);

            $name = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "Trademark" ORDER BY ORDINAL_POSITION');
            $name = json_decode(json_encode($name), 1);

            return view('admin::danhsach', ['base' => $trade, 'column' => $name,'table'=>'trademark']);
        } else {
            return view('admin::login');
        }
    }

    public function getedit($id)
    {
        $trade = Trademark::find($id);
        $trade = json_decode(json_encode($trade), 1);
        return view('admin::traderegist',['trade'=>$trade]);
    }
}
