<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        // if(isset($_GET('year'))) {
        //     $year = $_GET('year');
        // }
        // else{

        // }
        //ORDER
        $data = DB::select('SELECT count(*) as SUM,month(created_at) as MONTH FROM doan.order group by MONTH order by MONTH');
        $data = json_decode(json_encode($data), 1);
        $data1 = [];
        $i = count($data);

        for ($j = 0; $j < 12; $j++) {
            if ($j < $i) {
                if ($data[$j]['MONTH'] > $j) {
                    for ($a = 1; $a < ($data[$j]['MONTH'] - $j); $a++) {
                        $data1[] = 0;
                    }
                }
                $data1[$data[$j]['MONTH']] = $data[$j]['SUM'];
            } else {
                $data1[] = 0;
            }
        }
        $fini = array_slice($data1, 0, 12);

        //USER
        $user = DB::select('SELECT count(*) as SUM,month(created_at) as MONTH FROM doan.users group by MONTH order by MONTH');
        $user = json_decode(json_encode($user), 1);
        $user1 = [];
        $u = count($user);

        for ($j = 0; $j < 12; $j++) {
            if ($j < $u) {
                if ($user[$j]['MONTH'] > $j) {
                    for ($a = 1; $a < ($user[$j]['MONTH'] - $j); $a++) {
                        $user1[] = 0;
                    }
                }
                $user1[$user[$j]['MONTH']] = $user[$j]['SUM'];
            } else {
                $user1[] = 0;
            }
        }
        $user_fi = array_slice($user1, 0, 12);

        //Thong ke theo hang
        $cate = DB::select('SELECT doan.categories.name as Cate, sum(doan.products.quantity) as quantity FROM doan.categories
        left join doan.products on doan.categories.id = doan.products.cate_id group by Cate;');
        $cate = json_decode(json_encode($cate), 1);
        $namecate = [];
        $catedata = [];
        foreach ($cate as $key => $value) {
            $namecate[] = $value['Cate'];
            $catedata[] = $value['quantity'];
        }

        //Thong ke theo the loai
        if(isset($_GET['year'])){
            $year = $_GET['year'];
            // echo "<script>alert('1')</script>";
            $trade = DB::select('SELECT doan.Trademark.name as Tradename,year(Trademark.created_at) as YearTrade, sum(doan.products.quantity) as quantity FROM doan.Trademark left join
        doan.products on doan.Trademark.id = doan.products.trademark_id group by Tradename,YearTrade having YearTrade = ?',[$year]);
        $trade = json_decode(json_encode($trade), 1);
        $nametrade = [];
        $tradedata = [];
        foreach ($trade as $key => $value) {
            $nametrade[] = $value['Tradename'];
            $tradedata[] = $value['quantity'];
        }
        return view('admin::layouts.trademark',['nametrade' => $nametrade, 'tradedata' => $tradedata]);
        }else{
            // echo "<script>alert('1')</script>";
            $trade = DB::select('SELECT doan.Trademark.name as Tradename, sum(doan.products.quantity) as quantity FROM doan.Trademark left join
        doan.products on doan.Trademark.id = doan.products.trademark_id group by Tradename');
        }
        // $trade = DB::select('SELECT doan.Trademark.name as Tradename, sum(doan.products.quantity) as quantity FROM doan.Trademark left join
        // doan.products on doan.Trademark.id = doan.products.trademark_id group by Tradename');
        $trade = json_decode(json_encode($trade), 1);
        $nametrade = [];
        $tradedata = [];
        foreach ($trade as $key => $value) {
            $nametrade[] = $value['Tradename'];
            $tradedata[] = $value['quantity'];
        }
        return view('admin::statistic', [
            'fini' => $fini, 'user_fi' => $user_fi, 'nametrade' => $nametrade, 'tradedata' => $tradedata,
            'namecate' => $namecate, 'catedata' => $catedata
        ]);
    }

    public function trade($year)
    {
        //ORDER
        $data = DB::select('SELECT count(*) as SUM,month(created_at) as MONTH FROM doan.order group by MONTH order by MONTH');
        $data = json_decode(json_encode($data), 1);
        $data1 = [];
        $i = count($data);

        for ($j = 0; $j < 12; $j++) {
            if ($j < $i) {
                if ($data[$j]['MONTH'] > $j) {
                    for ($a = 1; $a < ($data[$j]['MONTH'] - $j); $a++) {
                        $data1[] = 0;
                    }
                }
                $data1[$data[$j]['MONTH']] = $data[$j]['SUM'];
            } else {
                $data1[] = 0;
            }
        }
        $fini = array_slice($data1, 0, 12);

        //USER
        $user = DB::select('SELECT count(*) as SUM,month(created_at) as MONTH FROM doan.users group by MONTH order by MONTH');
        $user = json_decode(json_encode($user), 1);
        $user1 = [];
        $u = count($user);

        for ($j = 0; $j < 12; $j++) {
            if ($j < $u) {
                if ($user[$j]['MONTH'] > $j) {
                    for ($a = 1; $a < ($user[$j]['MONTH'] - $j); $a++) {
                        $user1[] = 0;
                    }
                }
                $user1[$user[$j]['MONTH']] = $user[$j]['SUM'];
            } else {
                $user1[] = 0;
            }
        }
        $user_fi = array_slice($user1, 0, 12);

        //Thong ke theo hang
        $cate = DB::select('SELECT doan.categories.name as Cate, sum(doan.products.quantity) as quantity FROM doan.categories
        left join doan.products on doan.categories.id = doan.products.cate_id group by Cate;');
        $cate = json_decode(json_encode($cate), 1);
        $namecate = [];
        $catedata = [];
        foreach ($cate as $key => $value) {
            $namecate[] = $value['Cate'];
            $catedata[] = $value['quantity'];
        }

        //Thong ke theo the loai
        $trade = DB::select('SELECT doan.Trademark.name as Tradename, sum(doan.products.quantity) as quantity, year(doan.Trademark.created_at) as Year FROM doan.Trademark left join
        doan.products on doan.Trademark.id = doan.products.trademark_id group by Tradename,Year having Year = ?',['2020']);
        $trade = json_decode(json_encode($trade), 1);
        $nametrade = [];
        $tradedata = [];
        foreach ($trade as $key => $value) {
            $nametrade[] = $value['Tradename'];
            $tradedata[] = $value['quantity'];
        }
        return view('admin::statistic', [
            'fini' => $fini, 'user_fi' => $user_fi, 'nametrade' => $nametrade, 'tradedata' => $tradedata,
            'namecate' => $namecate, 'catedata' => $catedata
        ]);
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
}
