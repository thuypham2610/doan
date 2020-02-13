<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Http\Requests\AdminregisterRequest;

class AdminRegisterController extends Controller
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

    public function registadmin(AdminregisterRequest $request)
    {
        $login = $request->all();

        $insert = [
            'username' => $request->username,
            'email'    => $request->email,
            'address'  => $request->address,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password)
        ];

        if (session('role') == 2) {
            $insert['role'] = $request->role;
        }
        $admin = User::where('username', $login['username'])->get()->toArray();
        if ($admin != null) {
            return redirect()->back()->with('status', 'Username da ton tai');
        } elseif ($login['password'] != $login['password_confirmation']) {
            return redirect()->back()->with('status', 'Password khong chinh xac');
        } else {
            DB::table('users')->insert($insert);
            return redirect('admin/success');
        }
    }
}
