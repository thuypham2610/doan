<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Modules\Admin\Http\Requests\ChangdePasswordRequest;

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
    public function updatePass(ChangdePasswordRequest $request)
    {
        $user['password'] = Hash::make($request->password);
        $user['updated_at'] = now();
        DB::table('users')->where('id',Auth::user()->id)->update($user);
        $this->getLogout();
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
        $user = json_decode(json_encode(User::query()->where('username', $login['username'])->first()),1);
        if ($user['role'] == 1 || $user == 2) {
            if ($this->guard()->attempt($login)) {
                if (Auth::attempt($login)) {
                    $user = User::query()->where('username', $login['username'])->first()->toArray();
                    $request->session()->put('username', $login["username"]);
                    session(['username' => $login["username"]]);
                    session(['role' => $user['role']]);
                    return redirect('blog/');
                }
            } else {
                return redirect()->back()->with('status', 'User hoặc Password không chính xác');
            }
        } else {
            if (Auth::attempt($login)) {
                $user = User::query()->where('username', $login['username'])->first()->toArray();
                $request->session()->put('username', $login["username"]);
                session(['username' => $login["username"]]);
                session(['role' => $user['role']]);
                return redirect('blog/');
            } else {
                return redirect()->back()->with('status', 'User hoặc Password không chính xác');
            }
        }
    }


    public function getLogout()
    {
        $this->guard()->logout();
        Auth::logout();
        return redirect()->route('home');
    }

    private function guard()
    {
        return Auth::guard('admin');
    }
}
