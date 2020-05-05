<?php

namespace Modules\Admin\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
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
    public function update($id)
    {
        $chu = ['email' => 'thuypham12049@gmail.com', 'tinnhan' => 'Xac nhan don hang thanh cong. Cam on ban da mua hang tai shop'];
        Mail::send('blanks', $chu, function ($msg) use ($chu) {
            $msg->from('thuypham12049@gmail.com', 'Chu')->subject('Thu swift mailer');
            $msg->to($_REQUEST['email'], 'Khach hang');
        });
        $order = ['status' => '1'];
        DB::table('order')->where('id', $id)->update($order);
        return redirect('admin/orderlist');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $chu = ['email' => 'thuypham12049@gmail.com', 'tinnhan' => 'Sản phẩm hết hàng. Shop sẽ sớm nhập hàng mới. Cảm ơn bạn nhiều!'];
        Mail::send('blanks', $chu, function ($msg) use ($chu) {
            $msg->from('thuypham12049@gmail.com', 'Chu')->subject('Thu swift mailer');
            $msg->to($_REQUEST['email'], 'Khach hang');
        });
        DB::table('order')->where('id', $id)->delete();
        DB::table('order_detail')->where('order_id', $id)->delete();
        return redirect('admin/orderlist');
    }

    public function getorder()
    {
        if (Auth::check()) {
            $base = Order::paginate(5);
            $column = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "order" ORDER BY ORDINAL_POSITION');
            $table = 'order';
            return view('admin::danhsach', compact('base', 'column', 'table'));
        } else {
            return view('admin::login');
        }
    }
}
