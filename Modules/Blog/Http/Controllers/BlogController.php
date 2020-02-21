<?php

namespace Modules\Blog\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('blog::index');
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
