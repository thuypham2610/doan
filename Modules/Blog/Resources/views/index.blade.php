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
                                    <h5 class="h5"><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                        <form action="{{route('cart')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="name" value="{!! $item['name'] !!}" />
                                            <input type="hidden" name="price" value="{!! $item['price'] !!}" />
                                            <input type="hidden" name="id" value="{!! $item['id'] !!}" />
                                            <button type="submit" class="w3ls-cart">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach($productlap as $item)
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
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
                                        <h5 class="h5"><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                                        <div class="simpleCart_shelfItem">
                                            <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                            <form action="{{route('cart')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="name" value="{!! $item['name'] !!}">
                                                <input type="hidden" name="price" value="{!! $item['price'] !!}">
                                                <input type="hidden" name="id" value="{!! $item['id'] !!}">
                                                <button type="submit" class="w3ls-cart">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach($productdesk as $item)
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
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
                                        <h5 class="h5"><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                                        <div class="simpleCart_shelfItem">
                                            <p><i class="item_price">{!! $item['price'] !!} đ</i></p>
                                            <form action="{{route('cart')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="name" value="{!! $item['name'] !!}">
                                                <input type="hidden" name="price" value="{!! $item['price'] !!}">
                                                <input type="hidden" name="id" value="{!! $item['id'] !!}">
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
                @foreach($newproduct as $item)
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                            <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="h5"><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><i class="item_price">{!! $item['price'] !!}</i></p>
                            <form action="{{route('cart')}}" method="post">
                                @csrf
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="id" value="{!! $item['id'] !!}">
                                <input type="hidden" name="name" value="{!! $item['name'] !!}">
                                <input type="hidden" name="price" value="{!! $item['price'] !!}">
                                <button type="submit" class="w3ls-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //new-products -->

    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Top Brands</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">
                    <li>
                        <a><img src="{{Module::asset('blog:images/tb1.jpg')}}" alt=" " class="img-responsive" /></a>
                    </li>
                    <li>
                        <img src="{{Module::asset('blog:images/tb2.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{Module::asset('blog:images/tb3.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{Module::asset('blog:images/tb4.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{Module::asset('blog:images/tb5.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{Module::asset('blog:js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
    <!-- //top-brands -->
@endsection
