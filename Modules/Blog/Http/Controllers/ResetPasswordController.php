<?php

namespace Modules\Blog\Http\Controllers;

use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\ResetPasswordRequest;
use Modules\Admin\Http\Requests\ChangdePasswordRequest;

class ResetPasswordController extends Controller
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

    public function sendMail(Request $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();
        $password_reset = PasswordReset::all()->first();
        if($password_reset!= null)
            $password_reset->delete('email');
        $passwordReset = PasswordReset::create([
            'email' => $user->email,
            'token' => Str::random(60),
            'created_at'=>now()
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }

        return redirect()->back()->with('Da gui email thanh cong');
    }

    public function changepassword($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();
        if (Carbon::parse($passwordReset->created_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return response()->json([
                'message' => 'This password reset token is invalid.',
            ], 422);
        }

        return view('admin::recover-password',['token'=>$token]);
    }

    public function reset(ChangdePasswordRequest $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();

        $user = User::where('email', $passwordReset->email)->firstOrFail();
        $password = $request->password;
        $updatePasswordUser = $user->update(array('password'=> Hash::make($password)));
        $passwordReset->delete();

        return redirect()->route('home');
    }


}
