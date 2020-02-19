@extends('admin::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                @if (count($errors) >0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger"> {{ $error }}</li>
                        @endforeach
                    </ul>
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
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                      action="{{route('registadmin')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="text" id="inputPassword3" placeholder="thuy123"
                                       class="form-control input_width" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="email" class="form-control  input_file" placeholder="abc@gmail.com"
                                       name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="text" class="form-control  input_file" placeholder="korea" name="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-md-3 col-sm-10 ">
                                <input type="tel" id="inputPassword3" placeholder="0357783399"
                                       class="form-control input_width" name="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="password" id="inputPassword3" placeholder="******"
                                       class="form-control input_width" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password Confirmation</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="password" id="inputPassword3" placeholder="******"
                                       class="form-control input_width" name="password_confirmation">
                            </div>
                        </div>

                        @if(session('role')==2)
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-md-3 col-sm-10 ">
                                    <label class="radio-inline">
                                        <input name="rdoStatus" value="1" checked="" type="radio">Admin
                                    </label>
                                    <label class="radio-inline">
                                        <input name="rdoStatus" value="0" type="radio">Client
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
            </div>
        </div>
    </div>
@endsection
