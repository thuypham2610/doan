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
                    <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                      action="{{route('registadmin')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        @if(isset($pro))
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="name" value="{!! $pro['name'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="122"
                                           class="form-control input_width" name="quantity" value="{!! $pro['quantity'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="file" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="picture" style="line-height: 1.2rem" value="{!! $pro['picture'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="1222222"
                                           class="form-control input_width" name="price" value="{!! $pro['price'] !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-md-3 col-sm-10">
                                <textarea type="text" id="inputPassword3" placeholder="destop"
                                          class="form-control input_width" name="description">{!! $pro['description'] !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Trademark ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $trade = \App\Trademark::query()->get()->toArray();
                                    $trade = json_decode(json_encode($trade), 1);
                                    ?>
                                    <select class="form-control input_width">
                                        @foreach($trade as $item)
                                            <option value="{!! $item['id'] !!}" @if($item['id']==$pro['trademark_id']) selected @endif>{!! $item['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Category ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $cate = \App\Category::query()->get()->toArray();
                                    $cate = json_decode(json_encode($cate), 1);
                                    ?>
                                    <select class="form-control input_width">
                                        @foreach($cate as $item)
                                            <option value="{!! $item['id'] !!}" @if($item['id']==$pro['cate_id']) selected @endif>{!! $item['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="122"
                                           class="form-control input_width" name="quantity">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="file" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="picture" style="line-height: 1.2rem">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="1222222"
                                           class="form-control input_width" name="price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-md-3 col-sm-10">
                                <textarea type="text" id="inputPassword3" placeholder="destop"
                                          class="form-control input_width" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Trademark ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $trade = \App\Trademark::query()->get()->toArray();
                                    $trade = json_decode(json_encode($trade), 1);
                                    ?>
                                    <select class="form-control input_width">
                                        @foreach($trade as $item)
                                            <option value="{!! $item['id'] !!}">{!! $item['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Category ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $cate = \App\Category::query()->get()->toArray();
                                    $cate = json_decode(json_encode($cate), 1);
                                    ?>
                                    <select class="form-control input_width">
                                        @foreach($cate as $item)
                                            <option value="{!! $item['id'] !!}">{!! $item['name'] !!}</option>
                                        @endforeach
                                    </select>
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
