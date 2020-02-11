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
                    <h3 class="card-title">運営者登録</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('registadmin')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">名前</label>
                            <div class="col-md-6 col-sm-10">
                               <div class="row">
                                   <div class="col-md-2 col-sm-9 mb-2">
                                       <input type="text" class=" form-control" placeholder="姓" name="firstname">
                                   </div>
                                   <div class="col-md-2 col-sm-9 mb-2">
                                       <input type="text" class=" form-control" placeholder="名" name="lastname">
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">電話番号</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="tel" id="inputPassword3" placeholder="09123456789"
                                       class="form-control input_width" name="tel_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">ログインID</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="text" class="form-control  input_file" placeholder="Admin" name="login_id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">パスワード</label>
                            <div class="col-md-3 col-sm-10 ">
                                <input type="password" id="inputPassword3" placeholder="******"
                                       class="form-control input_width" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">パスワード</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="password" id="inputPassword3" placeholder="******"
                                       class="form-control input_width" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success toastsDefaultSuccess">
                            保存
                        </button>
                        <button type="submit" class="btn btn-default float-right">Reset</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection
