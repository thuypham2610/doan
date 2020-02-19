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
                    <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                      action="{{route('registadmin')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            @if(isset($cate))
                                <input type="text" id="inputPassword3" placeholder="Dell"
                                       class="form-control input_width" name="name" value="{!! $cate['name'] !!}">
                            @else
                                <input type="text" id="inputPassword3" placeholder="Dell"
                                       class="form-control input_width" name="name">
                            @endif
                        </div>
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
