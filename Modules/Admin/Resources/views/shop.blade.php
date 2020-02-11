@extends('admin::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">店舗管理＿新規店舗登録</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">公開</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="radio" name="r1" checked=""> 公開
                                <input type="radio" name="r1"> Nu
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">店名</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="password" id="inputPassword3" placeholder="Password"
                                       class="form-control input_width">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">店名</label>
                            <div class="col-md-3 col-sm-10">
                                <input type="file" class="form-control input-file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">店PR</label>
                            <div class="col-md-5 col-sm-10 ">
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">所在地</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 mb-2">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2 col-sm-10 mb-2">
                                        <input type="button" value="都道府県" name="address" class="btn btn-info">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-9 mb-2">
                                        <input type="text" class=" form-control">
                                    </div>
                                    <div class="col-md-2 col-sm-9 mb-2">
                                        <input type="text" class=" form-control">
                                    </div>
                                    <div class="col-md-2 col-sm-9 mb-2">
                                        <input type="text" class=" form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">連絡Tel</label>
                            <div class="col-md-2 col-sm-12">
                                <input type="text" class="form-control input_width">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Fax</label>
                            <div class="col-md-2 col-sm-12">
                                <input type="text" class="form-control input_width">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">最寄り駅</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 input_nearest_station">
                                        <input type="text" class="form-control " placeholder="路線" id="input_route">
                                    </div>
                                    <div class="col-md-3 col-sm-12 input_nearest_station">
                                        <input type="text" class="form-control " placeholder="駅名"
                                               id="input_station_name">
                                    </div>
                                    <div class="col-md-3 col-sm-12 input_nearest_station">
                                        <input type="text" class="form-control " placeholder="徒歩 (分)"
                                               id="input_time_walk">
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="color_nearest_station">
                                            <input type="button" value="府県" name="address" class="btn btn-info"
                                                   id="btn_show_nearest_station">
                                        </div>
                                    </div>
                                </div>

                                <div class="row display-0">
                                    <div class="col-md-6">
                                            <table class="table table-bordered show">
                                                <tbody id="show_station">

                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">予算</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 input-block">
                                        <input type="text" class="form-control ">
                                    </div>
                                    <div class="input-block">
                                        <span class="lbl-for- ">~</span>
                                    </div>
                                    <div class="col-md-2 col-sm-12 input-block">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">個室</label>
                            <div class="col-sm-10">
                                <input type="radio" name="seat" checked=""> Yes
                                <input type="radio" name="seat"> No
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">テーブル・座席数</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 input-block">
                                        <input type="text" class="form-control " placeholder="座席">
                                    </div>
                                    <div class="col-md-2 col-sm-12 input-block ">
                                        <input type="text" class="form-control" placeholder="テーブル">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">ジャンル </label>

                            <div class="col-sm-10">
                                <div class="row display-0">
                                    <div class="col-md-10" id="show">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 input-block">
                                        <input type="text" id="input_category" class="form-control input_width">
                                    </div>
                                    <div class="col-md-2 col-sm-12 input-block">
                                        <button type="button" id="btn_cate"
                                                class="btn btn-info">+
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">ログインID </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input_width">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">保存</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#btn_cate").click(function () {
                $(".display-0").css("display", "block");
                $("#show").append("<div class='show_text'><span class=\"btn btn-success show\">" +
                    $("#input_category").val() + "</span><span class=\"remove_img_preview\"></span></div>");
            });

            $(document).on('click', '.remove_img_preview', function(){
                $(this).parent().remove();
            })
        });

        $(document).ready(function () {
            $("#btn_show_nearest_station").click(function () {
                $(".display-0").css("display", "block");
                $("#show_station").append(" <tr> <td>" + $("#input_route").val() + "</td>" +
                    "<td>" + $("#input_station_name").val() + "</td>" +
                    "<td>" + $("#input_time_walk").val() + "</td></tr>");
            });
        });
    </script>
@endsection

