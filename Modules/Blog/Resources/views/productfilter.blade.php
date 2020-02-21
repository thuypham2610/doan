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
                                                <li><a href="products.html">Mobiles</a></li>
                                                <li><a href="products1.html">Laptop</a></li>
                                                <li><a href="products2.html">Tv</a></li>
                                                <li><a href="products.html">Wearables</a></li>
                                                <li><a href="products2.html">Refrigerator</a></li>
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
                                                <li><a href="products2.html">Grinder</a></li>
                                                <li><a href="products2.html">Heater</a></li>
                                                <li><a href="products2.html">Kid's Toys</a></li>
                                                <li><a href="products2.html">Filters</a></li>
                                                <li><a href="products2.html">AC</a></li>
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
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
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
                                <h5><a href="{{route('detail',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><i class="item_price">{!! $item['price'] !!}</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart"/>
                                        <input type="hidden" name="add" value="1"/>
                                        <input type="hidden" name="w3ls_item" value="{!! $item['name'] !!}"/>
                                        <input type="hidden" name="amount" value="{!! $item['price'] !!}"/>
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
    <div class="modal video-modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModal9">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/27.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Latest Smart Phone </h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$250</span> <i class="item_price">$245</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart"/>
                                    <input type="hidden" name="add" value="1"/>
                                    <input type="hidden" name="w3ls_item" value="Smart Phone"/>
                                    <input type="hidden" name="amount" value="245.00"/>
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModal8">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/25.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Latest Asus Red Laptop</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$980</span> <i class="item_price">$880</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="Asus Laptop">
                                    <input type="hidden" name="amount" value="880.00">
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModal7">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/p8.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Fastrack Digital Watch</h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$30</span> <i class="item_price">$25</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart"/>
                                    <input type="hidden" name="add" value="1"/>
                                    <input type="hidden" name="w3ls_item" value="Digital Watch"/>
                                    <input type="hidden" name="amount" value="25.00"/>
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/34.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Musical Kids Toy</h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$150</span> <i class="item_price">$100</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="Kids Toy">
                                    <input type="hidden" name="amount" value="100.00">
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/p7.jpg" alt=" " class="img-responsive">
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Home Security Camera</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$30</span> <i class="item_price">$22</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="Security Camera">
                                    <input type="hidden" name="amount" value="22.00">
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/p3.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Music MP3 Player </h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$60</span> <i class="item_price">$58</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart"/>
                                    <input type="hidden" name="add" value="1"/>
                                    <input type="hidden" name="w3ls_item" value="MP3 Player"/>
                                    <input type="hidden" name="amount" value=" $58.00"/>
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/38.jpg" alt=" " class="img-responsive">
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Kitchen &amp; Dining Accessories</h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$650</span> <i class="item_price">$645</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="Microwave Oven">
                                    <input type="hidden" name="amount" value="645.00">
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/p6.jpg" alt=" " class="img-responsive"/>
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Latest Asus ZenPad Tablet</h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal_body_right_cart  simpleCart_shelfItem">
                                <p><span>$45</span> <i class="item_price">$425</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart"/>
                                    <input type="hidden" name="add" value="1"/>
                                    <input type="hidden" name="w3ls_item" value="Latest Tablet"/>
                                    <input type="hidden" name="amount" value="425.00"/>
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span></a></li>
                                    <li><a href="#" class="brown"><span></span></a></li>
                                    <li><a href="#" class="purple"><span></span></a></li>
                                    <li><a href="#" class="gray"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
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
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="{!! $item['name'] !!}">
                                    <input type="hidden" name="amount" value="{!! $item['price'] !!}">
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
