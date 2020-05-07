@extends('admin::layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Detail Table</h3>
                    </div>
                    @if (json_decode($base,1)!='null')
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>Order ID</th>
                                    <th>Product ID</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Created At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; $dash = "Order Detail" ?>
                                @foreach($base as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <?php
                                    $i++;
                                    $item = json_decode(json_encode($item), 1);
                                    ?>
                                    @foreach($item as $key => $base2)
                                        @if ($key == 'product_id')
                                            <td><a href="{{ route('proedit', ['id' => $item['id']]) }}">{{ $base2 }}</a></td>
                                        @else
                                            <td>{!! $base2 !!}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$base->render()}}
                    </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
