@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <h3>Electronic Store, <span>Special Offers</span></h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-5 wthree_banner_bottom_left">
                <div class="video-img">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                        <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- pop-up-box -->
                <script src="{{Module::asset('blog:js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
                <!--//pop-up-box -->
                <div id="small-dialog" class="mfp-hide">
                    <iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
            </div>
            <div class="col-md-7 wthree_banner_bottom_right">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Máy tính bảng</a></li>
                        <li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Laptop</a></li>
                        <li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Desktop</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach($producttab as $item)
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                        <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                        <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                        <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">{!! $item['name'] !!}</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls_item" value="Mobile Phone1" />
                                            <input type="hidden" name="amount" value="{!! $item['price'] !!}" />
                                            <button type="submit" class="w3ls-cart">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="audio" aria-labelledby="audio-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach($productlap as $item)
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <div class="w3_hs_bottom">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h5><a href="single.html">{!! $item['name'] !!}</a></h5>
                                        <div class="simpleCart_shelfItem">
                                            <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Mobile Phone1" />
                                                <input type="hidden" name="amount" value="{!! $item['price'] !!}" />
                                                <button type="submit" class="w3ls-cart">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="video" aria-labelledby="video-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach($productdesk as $item)
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <div class="w3_hs_bottom">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h5><a href="single.html">{!! $item['name'] !!}</a></h5>
                                        <div class="simpleCart_shelfItem">
                                            <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls_item" value="Mobile Phone1" />
                                                <input type="hidden" name="amount" value="{!! $item['price'] !!}" />
                                                <button type="submit" class="w3ls-cart">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner-bottom -->

    <!-- new-products -->
    <div class="new-products">
        <div class="container">
            <h3>New Products</h3>
            <div class="agileinfo_new_products_grids">
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/25.jpg" alt=" " class="img-responsive" />
                            <img src="images/23.jpg" alt=" " class="img-responsive" />
                            <img src="images/24.jpg" alt=" " class="img-responsive" />
                            <img src="images/22.jpg" alt=" " class="img-responsive" />
                            <img src="images/26.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Laptops</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$520</span> <i class="item_price">$500</i></p>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls_item" value="Red Laptop">
                                <input type="hidden" name="amount" value="500.00">
                                <button type="submit" class="w3ls-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/27.jpg" alt=" " class="img-responsive" />
                            <img src="images/28.jpg" alt=" " class="img-responsive" />
                            <img src="images/29.jpg" alt=" " class="img-responsive" />
                            <img src="images/30.jpg" alt=" " class="img-responsive" />
                            <img src="images/31.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Black Phone</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$380</span> <i class="item_price">$370</i></p>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls_item" value="Black Phone">
                                <input type="hidden" name="amount" value="370.00">
                                <button type="submit" class="w3ls-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/34.jpg" alt=" " class="img-responsive" />
                            <img src="images/33.jpg" alt=" " class="img-responsive" />
                            <img src="images/32.jpg" alt=" " class="img-responsive" />
                            <img src="images/35.jpg" alt=" " class="img-responsive" />
                            <img src="images/36.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Kids Toy</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$150</span> <i class="item_price">$100</i></p>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls_item" value="Kids Toy">
                                <input type="hidden" name="amount" value="100.00">
                                <button type="submit" class="w3ls-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/37.jpg" alt=" " class="img-responsive" />
                            <img src="images/38.jpg" alt=" " class="img-responsive" />
                            <img src="images/39.jpg" alt=" " class="img-responsive" />
                            <img src="images/40.jpg" alt=" " class="img-responsive" />
                            <img src="images/41.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Induction Stove</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$280</span> <i class="item_price">$250</i></p>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls_item" value="Induction Stove">
                                <input type="hidden" name="amount" value="250.00">
                                <button type="submit" class="w3ls-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //new-products -->
@endsection
