@extends('admin::layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{!! $table !!} Table</h3>
                    </div>
                    @if (json_decode($base,1)!='null')
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    @foreach($column as $name)
                                    @foreach($name as $key => $va)
                                    <th>{!! $va !!}</th>
                                    @endforeach
                                    @endforeach
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($base as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <?php
                                    $i++;
                                    $item = json_decode(json_encode($item), 1);
                                    ?>
                                    @foreach($item as $key => $base2)
                                    @if($key == 'picture')
                                    <td><img src="{{Module::asset('admin:dist/img/')}}/{{$base2}}" alt=" " style="width: 50px; height: 50px" /></td>
                                    @else
                                    @if($key == 'status')
                                    <td>
                                        @if($base2 == 0)
                                        <a href="{{ route('confirmorder', ['id' => $item['id'],'email'=> $item['email']]) }}" class="btn btn-success toastsDefaultSuccess" style="color: white">
                                            Confirm
                                        </a>
                                        @else
                                        Confirmed
                                        @endif
                                    </td>
                                    @else
                                    <td>{!! $base2 !!}</td>
                                    @endif
                                    @endif
                                    @endforeach
                                    <td>
                                        @if ($table == 'order_detail')
                                        <?php
                                            $dash = 'Order detail List';
                                        ?>
                                        @endif
                                        @if($table == 'product')
                                        <?php
                                            $dash = 'Product List';
                                            $order = DB::select('SELECT * FROM `order_detail` where order_detail.product_id = ?', [$item['id']]);
                                        ?>
                                        <a href="{{ route('proedit', ['id' => $item['id']]) }}" class="btn btn-success toastsDefaultSuccess" style="color: white">
                                            Edit
                                        </a>
                                            @if ($order == null)
                                                <a href="{{ route('prodelete', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger toastsDefaultSuccess" style="color: white">
                                                    Delete
                                                </a>
                                            @else
                                                <button type="button" class="btn btn-danger toastrDefaultWarning">
                                                    Delete
                                                </button>
                                            @endif

                                        @endif

                                        @if($table == 'trademark')
                                        <?php
                                            $dash = 'Trademark List';
                                            $pro = DB::select('SELECT * FROM `products` where products.trademark_id = ?', [$item['id']]);
                                        ?>
                                        <a href="{{ route('tradeedit', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-success toastsDefaultSuccess" style="color: white">
                                            Edit
                                        </a>
                                        @if($pro != null)
                                        <button type="button" class="btn btn-danger toastrDefaultWarning">
                                            Delete
                                        </button>
                                        @else
                                        <a href="{{ route('tradedelete', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger" style="color: white">
                                            Delete
                                        </a>
                                        @endif
                                        
                                        @endif
                                        @if($table == 'category')
                                        <?php
                                            $dash = 'Category List';
                                            $pro = DB::select('SELECT * FROM `products` where products.trademark_id = ?', [$item['id']]);
                                        ?>
                                        <a href="{{ route('cateedit', ['id' => $item['id']]) }}" class="btn btn-success toastsDefaultSuccess" style="color: white">
                                            Edit
                                        </a>
                                            @if ($pro == null)
                                                <a href="{{ route('catedelete', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger toastsDefaultSuccess" style="color: white">
                                                    Delete
                                                </a>
                                            @else
                                                <button type="button" class="btn btn-danger toastrDefaultWarning">
                                                    Delete
                                                </button>
                                            @endif
                                        @endif
                                        @if($table == 'order')
                                        <a href="{{ route('destroy',['id' => $item['id'],'email'=> $item['email']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger toastsDefaultSuccess" style="color: white">
                                            Delete
                                        </a>
                                        <?php
                                            $dash = 'Order List';
                                        ?>
                                        @endif
                                        @if($table == 'users')
                                        <a href="{{ route('useredit', ['id' => $item['id']]) }}" class="btn btn-success toastsDefaultSuccess" style="color: white">
                                            Edit
                                        </a>
                                        @if (Auth::user()->role == 2 && $item['role'] != 2)
                                            <a href="{{ route('deleteadmin', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger toastsDefaultSuccess" style="color: white">
                                                Delete
                                            </a>
                                        @else 
                                            @if(Auth::user()->role == 1 && $item['role']== 0)
                                                <a href="{{ route('deleteadmin', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger toastsDefaultSuccess" style="color: white">
                                                    Delete
                                                </a>
                                            @else
                                                <button type="button" class="btn btn-danger toastrDefaultWarning">
                                                    Delete
                                                </button>
                                            @endif
                                        @endif
                                            
                                        <?php
                                            $dash = 'User List';
                                        ?>
                                        @endif
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
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Không thể xoá trường này!!!')
        });
    })
</script>
@endsection
