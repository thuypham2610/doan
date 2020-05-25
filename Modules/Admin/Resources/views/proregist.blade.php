<?php
    $dash = 'Register Product';
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
                    if (isset($s['quantity'])) {
                        $quantity = json_decode(json_encode($s['quantity'][0]), 1);
                    }
                    if (isset($s['price'])) {
                        $price = json_decode(json_encode($s['price'][0]), 1);
                    }
                    if (isset($s['picture'])) {
                        $picture = json_decode(json_encode($s['picture'][0]), 1);
                    }
                    if (isset($s['description'])) {
                        $description = json_decode(json_encode($s['description'][0]), 1);
                    }
                    ?>
                @endif

                @if (session('status'))
                    <ul>
                        <li class="text-danger"> {{ session('status') }}</li>
                    </ul>
                @endif
                <div class="card-header">
                    <h3 class="card-title">@if(isset($pro))Edit @else Add @endif Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                      action="@if(isset($pro)){{route('update_pro', ['id' => $pro['id']])}} @else {{route('registpro')}} @endif">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        @if(isset($pro))
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="name" value="{!! $pro['name'] !!}">
                                    @isset($name)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $name }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="122"
                                           class="form-control input_width" name="quantity" value="{!! $pro['quantity'] !!}">
                                    @isset($quantity)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $quantity }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="file" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="picture" style="line-height: 1.2rem" accept="image/*" onchange="loadFile(event)">
                                    <img id="output" style="height: 100px; width: 100px; margin-top: 10px" src="{{Module::asset('admin:dist/img/')}}/{{$pro['picture']}}"/>
                                    @isset($picture)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $picture }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="1222222"
                                           class="form-control input_width" name="price" value="{!! $pro['price'] !!}">
                                    @isset($price)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $price }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-md-3 col-sm-10">
                                <textarea type="text" id="editor1" placeholder="destop"
                                          class="form-control input_width" name="description" id="editor1">{!! $pro['description'] !!}</textarea>
                                    @isset($description)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $description }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Trademark ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $trade = \App\Trademark::query()->get()->toArray();
                                    $trade = json_decode(json_encode($trade), 1);
                                    ?>
                                    <select class="form-control input_width" name="trademark_id">
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
                                    <select class="form-control input_width" name="cate_id">
                                        @foreach($cate as $item)
                                            <option value="{!! $item['id'] !!}" @if($item['id']==$pro['cate_id']) @endif>{!! $item['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="name" value="{{ old('name') }}">
                                    @isset($name)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $name }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="122"
                                           class="form-control input_width" name="quantity" value="{{ old('quantity') }}">
                                    @isset($quantity)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $quantity }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="file" id="inputPassword3" placeholder="Acer"
                                           class="form-control input_width" name="picture" style="line-height: 1.2rem" accept="image/*" onchange="loadFile(event)" value="{{ old('picture') }}">
                                    <img id="output" style="height: 100px; width: 100px; margin-top: 10px; display: none"/>
                                    @isset($picture)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $picture }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-md-3 col-sm-10">
                                    <input type="text" id="inputPassword3" placeholder="1222222"
                                           class="form-control input_width" name="price" value="{{ old('price') }}">
                                    @isset($price)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $price }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-md-3 col-sm-10">
                                <textarea type="text" id="editor1" placeholder="destop"
                                          class="form-control input_width" name="description">{{ old('description') }}</textarea>
                                    @isset($description)
                                        <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ $description }}
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Trademark ID</label>
                                <div class="col-md-3 col-sm-10">
                                    <?php
                                    $trade = \App\Trademark::query()->get()->toArray();
                                    $trade = json_decode(json_encode($trade), 1);
                                    ?>
                                    <select class="form-control input_width" name="trademark_id" id="trademark_id">
                                        @foreach($trade as $item)
                                            <option value="{{ $item['id'] }}">{!! $item['name'] !!}</option>
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
                                    <select class="form-control input_width" name="cate_id" id="cate_id">
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
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

    <script>
        var loadFile = function(event) {
            document.getElementById("output").style.display = "block";
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('editor1', options);
    </script>
@endsection
