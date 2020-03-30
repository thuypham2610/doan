<?php

namespace Modules\Blog\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Modules\Admin\Http\Requests\AdminregisterRequest;
use Modules\Admin\Http\Requests\ChangdePasswordRequest;

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
     * @param ChangdePasswordRequest $request
     * @return Response
     */
    public function updatepass(ChangdePasswordRequest $request)
    {
        $user['password'] = Hash::make($request->password);
        $user['updated_at'] = now();
        DB::table('users')->where('id', Auth::user()->id)->update($user);
        $this->guard()->logout();
        Auth::logout();
        return redirect()->route('home');
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
    public function destroy($id)
    {
        DB::table('order')->where('id', $id)->delete();
        DB::table('order_detail')->where('order_id', $id)->delete();
        return redirect('blog/');
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
                'username'              => ['required', 'string', 'max:10', Rule::unique('users')->whereNotIn('username', [Auth::user()->username])],
                'email'                 => ['required', 'string', 'max:30', Rule::unique('users')->whereNotIn('email', [Auth::user()->email])],
                'address'               => ['required', 'string', 'max:100'],
                'phone'                 => ['required', 'string', 'max:10'],
                'name'                  => ['required']
            ]
        );
        $user = $request->all();
        $user['updated_at'] = now();
        unset($user['_token']);
        DB::table('users')->where('id', Auth::user()->id)->update($user);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function mail(Request $request)
    {
        $chu = ['email' => $request->email, 'tinnhan' => $request->message];
        Mail::send('blanks', $chu, function ($msg) use ($chu) {
            $msg->to('thuypham12049@gmail.com', 'Khach');
            $msg->from($chu['email'], 'Chu')->subject('Thu swift mailer');
        });
        return redirect('blog/');
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
