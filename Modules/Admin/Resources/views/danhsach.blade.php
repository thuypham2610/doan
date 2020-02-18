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
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Picture</th>
                                    <th>Description</th>
                                    <th>Trademark ID</th>
                                    <th>Category ID</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $pro = \App\Product::query()->get()->toArray();
                                    $pro = json_decode(json_encode($pro),1);
                                ?>
                                @foreach($pro as $item)
                                <tr>
                                    <td>{!! $item['id'] !!}</td>
                                    <td>{!! $item['name'] !!}</td>
                                    <td>{!! $item['quantity'] !!}</td>
                                    <td>{!! $item['price'] !!}</td>
                                    <td><img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " style="width: 50px; height: 50px" /></td>
                                    <td>{!! $item['description'] !!}</td>
                                    <td>{!! $item['trademark_id'] !!}</td>
                                    <td>{!! $item['cate_id'] !!}</td>
                                    <td></td>
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
