@extends('blog::layouts.blog')

@section('content')
    <div class="single">
        <div class="container">
            <div class="col-md-4 single-left">
                <div class="flexslider">

                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides"
                            style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-680px, 0px, 0px);">
                            <li data-thumb="images/c.jpg" class="clone" aria-hidden="true"
                                style="width: 340px; float: left; display: block;">
                                <div class="thumb-image"><img src="{{Module::asset('admin:dist/img/')}}/{{$product['picture']}}" data-imagezoom="true"
                                                              class="img-responsive" alt="" draggable="false"></div>
                            </li>
                        </ul>
                    </div>
                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
                <!-- flexslider -->
                <script defer="" src="{{Module::asset('blog:js/jquery.flexslider.js')}}"></script>
                <link rel="stylesheet" href="{{Module::asset('blog:css/flexslider.css')}}" type="text/css" media="screen">
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
                <!-- flexslider -->
                <!-- zooming-effect -->
                <script src="{{Module::asset('blog:js/imagezoom.js')}}"></script>
                <!-- //zooming-effect -->
            </div>
            <div class="col-md-8 single-right">
                <h3>{!! $product['name'] !!}</h3>
                <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
                </div>
                <div class="description">
                    <h5><i>Description</i></h5>
                    <p>{!! $product['description'] !!}</p>
                </div>
                <div class="color-quality">
                    <div class="color-quality-left">
                        <h5>Color : </h5>
                        <ul>
                            <li><a href="#"><span></span></a></li>
                            <li><a href="#" class="brown"><span></span></a></li>
                            <li><a href="#" class="purple"><span></span></a></li>
                            <li><a href="#" class="gray"><span></span></a></li>
                        </ul>
                    </div>
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                            </div>
                        </div>
                        <!--quantity-->
                        <script>
                            $('.value-plus1').on('click', function () {
                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                divUpd.text(newVal);
                            });

                            $('.value-minus1').on('click', function () {
                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                if (newVal >= 1) divUpd.text(newVal);
                            });
                        </script>
                        <!--quantity-->

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="occasional">
                    <h5>RAM :</h5>
                    <div class="colr ert">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>3
                                GB</label>
                        </div>
                    </div>
                    <div class="colr">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>2 GB</label>
                        </div>
                    </div>
                    <div class="colr">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>1 GB</label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="simpleCart_shelfItem">
                    <p><i class="item_price">{!! $product['price'] !!}</i></p>
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
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
