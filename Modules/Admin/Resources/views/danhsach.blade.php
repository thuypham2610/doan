@extends('admin::layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    @foreach($column as $name)
                                        @foreach($name as $key => $va)
                                            <th>{!! $va !!}</th>
                                        @endforeach
                                    @endforeach
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($base as $item)
                                    <tr>
                                        @foreach($item as $key => $base)
                                            @if($key == 'picture')
                                                <td><img src="{{Module::asset('admin:dist/img/')}}/{{$base}}" alt=" "
                                                         style="width: 50px; height: 50px"/></td>
                                            @else
                                                <td>{!! $base !!}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            @if($table == 'product')
                                                <a href="{{ route('proedit', ['id' => $item['id']]) }}"
                                                   class="btn btn-success toastsDefaultSuccess" style="color: white">
                                                    Edit
                                                </a>
                                                <a href="" class="btn btn-danger toastsDefaultSuccess"
                                                   style="color: white">
                                                    Delete
                                                </a>
                                            @endif

                                            @if($table == 'trademark')
                                                <a href="{{ route('tradeedit', ['id' => $item['id']]) }}"
                                                   class="btn btn-success toastsDefaultSuccess" style="color: white">
                                                    Edit
                                                </a>
                                                <a href="" class="btn btn-danger toastsDefaultSuccess"
                                                   style="color: white">
                                                    Delete
                                                </a>
                                            @endif
                                            @if($table == 'category')
                                                <a href="{{ route('cateedit', ['id' => $item['id']]) }}"
                                                   class="btn btn-success toastsDefaultSuccess" style="color: white">
                                                    Edit
                                                </a>
                                                <a href="" class="btn btn-danger toastsDefaultSuccess"
                                                   style="color: white">
                                                    Delete
                                                </a>
                                            @endif
                                            @if($table == 'order')
                                                <a href="{{ route('orderedit', ['id' => $item['id']]) }}"
                                                   class="btn btn-success toastsDefaultSuccess" style="color: white">
                                                    Edit
                                                </a>
                                                <a href="" class="btn btn-danger toastsDefaultSuccess"
                                                   style="color: white">
                                                    Delete
                                                </a>
                                            @endif
                                            @if($table == 'order_detail')
                                                <a href="{{ route('detailedit', ['id' => $item['id']]) }}"
                                                   class="btn btn-success toastsDefaultSuccess" style="color: white">
                                                    Edit
                                                </a>
                                                <a href="" class="btn btn-danger toastsDefaultSuccess"
                                                   style="color: white">
                                                    Delete
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
