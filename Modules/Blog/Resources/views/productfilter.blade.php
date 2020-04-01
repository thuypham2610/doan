@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner banner2">
        <div class="container">
            <h2>Top Selling <span>Gadgets</span> Flat <i>25% Discount</i></h2>
        </div>
    </div>
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <i>/</i></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="mobiles">
        <div class="container">
            <div class="w3ls_mobiles_grids">
                <div class="col-md-4 w3ls_mobiles_grid_left">
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Categories</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                               aria-controls="collapseOne">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                    class="glyphicon glyphicon-minus" aria-hidden="true"></i>New
                                                Arrivals
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                <?php
                                                $cate = \App\Category::query()->get()->toArray();
                                                $cate = json_decode(json_encode($cate), 1);
                                                ?>
                                                @foreach($cate as $item)
                                                    <li><a href="{{route('newarrivals',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                               aria-controls="collapseTwo">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                    class="glyphicon glyphicon-minus" aria-hidden="true"></i>Accessories
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTwo">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                <?php
                                                $trade = \App\Trademark::query()->get()->toArray();
                                                $trade = json_decode(json_encode($trade), 1);
                                                ?>
                                                @foreach($trade as $item)
                                                    <li><a href="{{route('filter',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="panel_bottom">
                                <li><a href="products.html">Summer Store</a></li>
                                <li><a href="products.html">Featured Brands</a></li>
                                <li><a href="products.html">Today's Deals</a></li>
                                <li><a href="products.html">Latest Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Color</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="ecommerce_color">
                                <ul>
                                    <li><a href="#"><i></i> Red(5)</a></li>
                                    <li><a href="#"><i></i> Brown(2)</a></li>
                                    <li><a href="#"><i></i> Yellow(3)</a></li>
                                    <li><a href="#"><i></i> Violet(6)</a></li>
                                    <li><a href="#"><i></i> Orange(2)</a></li>
                                    <li><a href="#"><i></i> Blue(1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Price</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="ecommerce_color ecommerce_size">
                                <ul>
                                    <li><a href="#">Below $ 100</a></li>
                                    <li><a href="#">$ 100-500</a></li>
                                    <li><a href="#">$ 1k-10k</a></li>
                                    <li><a href="#">$ 10k-20k</a></li>
                                    <li><a href="#">$ Above 20k</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 w3ls_mobiles_grid_right">
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{Module::asset('blog:images/48.jpg')}}" alt=" " class="img-responsive"/>
                            <div class="w3ls_mobiles_grid_right_grid1_pos1">
                                <h3>Attractive<span> New</span> Wrist Watches</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{Module::asset('blog:images/49.jpg')}}" alt=" " class="img-responsive"/>
                            <div class="w3ls_mobiles_grid_right_grid1_pos">
                                <h3>Best Prices On<span> Laptop</span>Upto 50% Off</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="w3ls_mobiles_grid_right_grid2">
                        <div class="w3ls_mobiles_grid_right_grid2_left">
                            <h3>Showing Results: 0-1</h3>
                        </div>
                        <div class="w3ls_mobiles_grid_right_grid2_right">
                            <select name="select_item" class="select_item">
                                <option selected="selected">Default sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by newness</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="w3ls_mobiles_grid_right_grid3">
                        @foreach($product as $item)
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles" style="margin-top: 10px">
                            <div class="agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                    <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                    <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                    <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                    <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal8"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
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
                                        <input type="hidden" name="name" value="{!! $item['name'] !!}">
                                        <input type="hidden" name="price" value="{!! $item['price'] !!}">
                                        <input type="hidden" name="id" value="{!! $item['id'] !!}">
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- Related Products -->
    <div class="w3l_related_products">
        <div class="container">
            <h3>Related Products</h3>
            <ul id="flexiselDemo2">
                @foreach($newproduct as $item)
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left mobiles_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                <img src="{{Module::asset('admin:dist/img/')}}/{{$item['picture']}}" alt=" " class="img-responsive"/>
                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span
                                                class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>$150</span> <i class="item_price">{!! $item['price'] !!}</i></p>
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
                    </div>
                </li>
                @endforeach
            </ul>

            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo2").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 568,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 667,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{Module::asset('blog:js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
    <!-- //Related Products -->
@endsection
