<?php
    $dash = 'Trademark Register';
?>
@extends('admin::layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            @if (session('status'))
            <ul>
                <li class="text-danger"> {{ session('status') }}</li>
            </ul>
            @endif
            <div class="card-header">
                <h3 class="card-title">@if(isset($trade)) Edit @else Add @endif Trademark</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="@if(isset($trade)){{route('edittrade', ['id' => $trade['id']])}} @else {{route('registtrade')}} @endif">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-md-3 col-sm-10">
                            @if(isset($trade))
                            <input type="text" id="inputPassword3" placeholder="Dell" class="form-control input_width" name="name" value="{!! $trade['name'] !!}">
                            @if (count($errors) >0)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php
                                $s = json_decode($errors, 1);
                                print_r($s['name'][0]);
                                ?>
                            </div>
                            @endif
                            @else
                            <input type="text" id="inputPassword3" placeholder="Dell" class="form-control input_width" name="name" value="{{ old('name') }}">
                            @if (count($errors) >0)
                            <div class="alert alert-danger" style="margin-top: 10px;margin-bottom: -4px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php
                                $s = json_decode($errors, 1);
                                print_r($s['name'][0]);
                                ?>
                            </div>
                            @endif
                            @endif
                        </div>
                    </div>
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
@endsection
