<?php

namespace Modules\Admin\Http\Controllers;

use App\Trademark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Http\Requests\TradeRequest;

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
    public function update(TradeRequest $request, $id)
    {
        $trade = $request->all();
        unset($trade['_token']);
        DB::table('Trademark')->where('id',$id)->update($trade);
        return redirect('admin/tradelist');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $trade = Trademark::find($id);
        $trade->delete();

        return redirect('admin/tradelist');
    }


    public function gettrade()
    {
        if (Auth::check()) {
            $base = DB::table('Trademark')->paginate(5);

            $column = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "Trademark" ORDER BY ORDINAL_POSITION');

            $table = 'trademark';
            return view('admin::danhsach', compact('base','column','table'));
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

    public function regist(TradeRequest $request)
    {
        $trade = ['name'=>$request->name];
        $trade_esist = Trademark::where('name', $trade['name'])->get()->toArray();
        if ($trade_esist != null) {
            return redirect()->back()->with('status', 'Da ton tai');
        } else {
            DB::table('Trademark')->insert($trade);
            return redirect('admin/tradelist');
        }
    }
}
