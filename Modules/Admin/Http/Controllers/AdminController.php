<?php

namespace Modules\Admin\Http\Controllers;

use App\Trademark;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Modules\Admin\Http\Requests\AdminregisterRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $base = DB::table('users')->paginate(5);
        $column = [
            [
                'id', 'username', 'name', 'email', 'birthday', 'address', 'phone', 'password',
                'role', 'remember_token', 'created_at', 'updated_at'
            ]
        ];

        $table = 'users';
        return view('admin::danhsach', compact('base', 'column', 'table'));
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
        $user = User::find($id);
        $user = json_decode(json_encode($user), 1);
        return view('admin::registeradmin', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user = json_decode(json_encode($user), 1);
        $request->validate(
            [
                'username'              => ['required', 'string', 'max:10', Rule::unique('users')->whereNotIn('username', [$user['username']])],
                'email'                 => ['required', 'string', 'max:30', Rule::unique('users')->whereNotIn('email', [$user['email']])],
                'address'               => ['required', 'string', 'max:100'],
                'phone'                 => ['required', 'string', 'max:10'],
                'password'              => ['required', 'confirmed', 'string', 'min:6', 'max:20'],
                'password_confirmation' => ['required', 'string', 'min:6', 'max:20']
            ]
        );
        $user = $request->all();
        $user['password'] = Hash::make($request->password);
        $user['updated_at'] = now();
        unset($user['_token']);
        unset($user['password_confirmation']);
        DB::table('users')->where('id', $id)->update($user);
        return redirect('admin/userlist');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('admin/userlist');
    }
}
