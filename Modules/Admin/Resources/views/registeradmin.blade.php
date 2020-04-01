<?php
    $dash = 'Register User';
?>
@extends('admin::layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            @if (count($errors) >0)

            <?php
            $s = json_decode($errors, 1);
            if (isset($s['name'])) {
                $name = json_decode(json_encode($s['name'][0]), 1);
            }
            if (isset($s['username'])) {
                $username = json_decode(json_encode($s['username'][0]), 1);
            }
            if (isset($s['email'])) {
                $email = json_decode(json_encode($s['email'][0]), 1);
            }
            if (isset($s['address'])) {
                $address = json_decode(json_encode($s['address'][0]), 1);
            }
            if (isset($s['phone'])) {
                $phone = json_decode(json_encode($s['phone'][0]), 1);
            }
            if (isset($s['password'])) {
                $password = json_decode(json_encode($s['password'][0]), 1);
            }
            if (isset($s['password_confirmation'])) {
                $password_confirmation = json_decode(json_encode($s['password_confirmation'][0]), 1);
            }
            ?>
            @endif

            @if (session('status'))
            <ul>
                <li class="text-danger"> {{ session('status') }}</li>
            </ul>
            @endif
            <div class="card-header">
                <h3 class="card-title">Add User</h3>
            </div>
            <!-- /.card-header -->
            @if(isset($user))
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('updateadmin',['id'=> $user['id']])}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="text" id="inputPassword3" placeholder="thuy123" class="form-control input_width" name="username" value="{{$user['username']}}">
                           @isset($username)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $username }}
                            </div>
                           @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="text" id="inputPassword3" placeholder="Thuy" class="form-control input_width" name="name" value="{{$user['name']}}">
                            @isset($name)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $name }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="email" class="form-control  input_file" placeholder="abc@gmail.com" name="email" value="{{$user['email']}}">
                            @isset($email)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $email }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-md-3 col-sm-10" style="margin-top: 10px;margin-bottom: -4px;">
                            <input type="text" class="form-control  input_file" placeholder="korea" name="address" value="{{$user['address']}}">
                            @isset($address)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $address }}
                            </div>
                            @endisset
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="date" class="form-control  input_file" placeholder="korea" name="birthday" value="{{$user['birthday']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-md-3 col-sm-10 ">
                            <input type="tel" id="inputPassword3" placeholder="0357783399" class="form-control input_width" name="phone" value="{{$user['phone']}}">
                            @isset($phone)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $phone }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="password" id="inputPassword3" placeholder="******" class="form-control input_width" name="password">
                            @isset($password)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $password }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password
                            Confirmation</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="password" id="inputPassword3" placeholder="******" class="form-control input_width" name="password_confirmation">
                            @isset($password_confirmation)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $password_confirmation }}
                            </div>
                            @endisset
                        </div>
                    </div>

                    @if(Auth::user()->role ==2)
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-md-3 col-sm-10 ">
                            <label class="radio-inline">
                                <input name="role" value="1" checked="" type="radio">Admin
                            </label>
                            <label class="radio-inline">
                                <input name="role" value="0" type="radio">Client
                            </label>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success toastsDefaultSuccess toastsDefaultDanger">
                        Save
                    </button>
                    <button type="submit" class="btn btn-default float-right">Reset</button>
                </div>
                <!-- /.card-footer -->
            </form>
            @else
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('registadmin')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="text" id="inputPassword3" placeholder="thuy123" class="form-control input_width" name="username" value="{{ old('username') }}">
                            @isset($username)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $username }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="text" id="inputPassword3" placeholder="Thuy" class="form-control input_width" name="name" value="{{ old('name') }}">
                            @isset($name)
                            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $name }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="email" class="form-control  input_file" placeholder="abc@gmail.com" name="email" value="{{ old('email') }}">
                            @isset($email)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $email }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="text" class="form-control  input_file" placeholder="korea" name="address" value="{{ old('address') }}">
                            @isset($address)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $address }}
                            </div>
                            @endisset
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="date" class="form-control  input_file" placeholder="korea" name="birthday" value="{{ old('birthday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-md-3 col-sm-10 ">
                            <input type="tel" id="inputPassword3" placeholder="0357783399" class="form-control input_width" name="phone" value="{{ old('phone') }}">
                            @isset($phone)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $phone }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="password" id="inputPassword3" placeholder="******" class="form-control input_width" name="password">
                            @isset($password)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $password }}
                            </div>
                            @endisset
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password
                            Confirmation</label>
                        <div class="col-md-3 col-sm-10">
                            <input type="password" id="inputPassword3" placeholder="******" class="form-control input_width" name="password_confirmation">
                            @isset($password_confirmation)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $password_confirmation }}
                            </div>
                            @endisset
                        </div>
                    </div>

                    @if(session('role')==2)
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-md-3 col-sm-10 ">
                            <label class="radio-inline">
                                <input name="role" value="1" checked="" type="radio">Admin
                            </label>
                            <label class="radio-inline">
                                <input name="role" value="0" type="radio">Client
                            </label>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success toastsDefaultSuccess">
                        Save
                    </button>
                    <button type="submit" class="btn btn-default float-right">Reset</button>
                </div>
                <!-- /.card-footer -->
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
