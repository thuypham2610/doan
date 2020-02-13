<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::home');
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

    public function postLogin(Request $request)
    {
        $login = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if ($this->guard()->attempt($login)) {
            $request->session()->put('username', $login["username"]);
            session(['username' => $login["username"]]);
            $user = User::find($login["username"])->first()->toArray();
            if ($user['role'] == 1) {
                return redirect('admin/success');
            }else{
                return redirect()->back()->with('status', 'Khong cos quyen truy cap');
            }
        } else {
            return redirect()->back()->with('status', 'User hoặc Password không chính xác');
        }
    }


    public function getLogout()
    {
        $this->guard()->logout();
        return redirect()->route('getLogin');
    }

    private function guard()
    {
        return Auth::guard('admin');
    }
}
