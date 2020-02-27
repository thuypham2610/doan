<?php

namespace Modules\Blog\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Modules\Admin\Http\Requests\AdminregisterRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function regist(AdminregisterRequest $request)
    {
        $login = $request->all();

        $insert = [
            'username' => $request->username,
            'email'    => $request->email,
            'address'  => $request->address,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password)
        ];

        DB::table('users')->insert($insert);
        return redirect('blog/');
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
    public function update(Request $request)
    {
        $request->validate(
            [
                'username'              => ['required', 'string','max:10',Rule::unique('users')->whereNotIn('username',[Auth::user()->username])],
                'email'                 => ['required', 'string','max:30',Rule::unique('users')->whereNotIn('email',[Auth::user()->email])],
                'address'               => ['required', 'string','max:100'],
                'phone'                 => ['required', 'string','max:10'],
                'password'              => ['required', 'confirmed', 'string','max:20'],
                'password_confirmation' => ['required', 'string','max:20']
            ]);
        if (Hash::check($request->old, Auth::user()->password)) {
            $user = $request->all();
            $user['password'] = Hash::make($request->password);
            $user['updated_at'] = now();
            unset($user['_token']);
            unset($user['password_confirmation']);
            unset($user['old']);
            DB::table('users')->where('id', Auth::user()->id)->update($user);
            $this->guard()->logout();
            Auth::logout();
            return redirect()->route('home');
        }else{
            return redirect()->back();
        }
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
            $user = User::query()->where('username', $login['username'])->first()->toArray();
            $request->session()->put('username', $login["username"]);
            session(['username' => $login["username"]]);
            session(['role' => $user['role']]);
            return redirect('blog/profile');
        } else {
            return redirect()->back()->with('status', 'User hoặc Password không chính xác');
        }
    }


    public function getLogout()
    {
        $this->guard()->logout();
        return redirect()->route('home');
    }

    private function guard()
    {
        return Auth::guard('web');
    }
}
