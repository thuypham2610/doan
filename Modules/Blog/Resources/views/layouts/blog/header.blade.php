<!-- for bootstrap working -->
<script type="text/javascript" src="{{Module::asset('blog:js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<!-- header modal -->
<style>
    .main1 {
        width: 30px;
        height: 18px;
        float: left;
    }

    .price {
        float: left;
        width: 16%;
        text-align: right;
    }

    .ul {
        clear: both;
        float: left;
        width: 100%;
        margin: 5px 0 20px;
        padding: 1em;
        list-style-type: none;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        overflow-y: scroll;
        max-height: 300px;
    }

    .divmain {
        padding: 1em;
        background: #fbfbfb;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -o-border-radius: 4px;
        -ms-border-radius: 4px;
        border-radius: 4px;
        color: #333;
        -webkit-box-shadow: 0px 0px 5px 2px #9a9a9a;
        -moz-box-shadow: 0px 0px 5px 2px #9a9a9a;
        -o-box-shadow: 0px 0px 5px 2px #9a9a9a;
        -ms-box-shadow: 0px 0px 5px 2px #9a9a9a;
        box-shadow: 0px 0px 5px 2px #9a9a9a;
    }

    .footer1{
        clear: both;
        text-align: center;
        margin-right: 1.5em;
        position: relative;
        top: 0.7rem;
    }

    .total{
        bottom: 3px;
        padding-left: 0;
        font-size: 16px;
        font-weight: bold;
        display: block;
        text-align: left;
        right: 0;
        top: 0;
    }

    .pay{
        margin-right: 6px;
        padding: 0;
        border: none;
        color: #ff5063;
        background: none;
        outline: none;
        font-size: 0.9em;
        font-weight: 700;
        position: absolute;
        text-transform: uppercase;
        right: 0;
        top: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
</style>
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-8 modal_body_left modal_body_left1"
                         style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                                </ul>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
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
                                            <form action="{{ route('postLogin') }}" method="post">
                                                @csrf
                                                <input name="username" placeholder="Username" type="text">
                                                <input name="password" placeholder="Password" type="password">
                                                <div class="sign-up">
                                                    <input type="submit" value="Sign in"/>
                                                    <a href="{{route('forgotpass')}}">I forgot password</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="#" method="post">
                                                @csrf
                                                <input placeholder="Name" name="name" type="text" required="">
                                                <input placeholder="Email Address" name="email" type="email"
                                                       required="">
                                                <input placeholder="Password" name="password" type="password"
                                                       required="">
                                                <input placeholder="Confirm Password" name="password_confirmation"
                                                       type="password"
                                                       required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Create Account"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="{{Module::asset('blog:js/easyResponsiveTabs.js')}}"
                                type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion
                                    width: 'auto', //auto or any width like 600px
                                    fit: true   // 100% fit in a container
                                });
                            });
                        </script>
                        <div id="OR" class="hidden-xs">OR</div>
                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3 class="other-nw">Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <ul class="social">
                                    <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                    <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                    <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                                    <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<script>--}}
{{--    $('#myModal88').modal('show');--}}
{{--</script>--}}
<!-- header modal -->
<!-- header -->
<div class="header" id="home1">
    <div class="container">
        @if(Auth::check())
            <div class="dropdown" id="bs-megadropdown-tabs" style="top: 2.5rem">
                <a class="dropdown-toggle w3pages" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="@if(Auth::user()->role == 1 || Auth::user()->role == 2){{route('profile')}} @else {{route('profileuser')}} @endif">Profile</a>
                        </li>
                        <li><a href="{!! route('getLogout') !!}">Logout</a></li>
                    </ul>
                </a>
            </div>
        @else
            <div class="w3l_login">
                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user"
                                                                               aria-hidden="true"></span></a>
            </div>
        @endif
        <div class="w3l_logo">
            <h1><a href="{{route("home")}}">An Dương<span>Your stores. Your place.</span></a></h1>
        </div>
        <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
                                                              aria-hidden="true"></span></label>
            <div class="search_form">
                <form action="{{ route('search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Search...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <div class="cart cart box_1">
                {{--<button class="w3view-cart" type="submit" name="submit" value=""></button>--}}
            <?php $pro = \Gloudemans\Shoppingcart\Facades\Cart::getContent()->toArray();
            $total = 0;
            ?>
                <div class="dropdown" id="bs-megadropdown-tabs"
                     style="top: 2.5rem; position: fixed;left: 83%;width: 420px;">
                    <a class="dropdown-toggle w3pages" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-cart-arrow-down"
                                                aria-hidden="true" style="font-size: 50px;position: fixed;"></i>
                        <ul class="dropdown-menu ul divmain" style="top: 49px;left: -17rem;width: 420px">

                            @if($pro!= null)
                                @foreach($pro as $item)
                                    <?php $total+= ($item['price']*$item['quantity']);?>
                                    <li class="sbmincart-item"
                                        style="clear: left;padding: 7px 0;min-height: 35px;font-size: 0.85em;">
                                        <div class="sbmincart-details-name" style="float: left;width: 62%;">
                                            <a class="sbmincart-name"
                                               href="file:///Users/trente/Downloads/web/index.html">{{$item['name']}}</a>
                                            <ul class="sbmincart-attributes"></ul>
                                        </div>
                                        <div class="sbmincart-details-quantity">
                                            <input class="sbmincart-quantity main1" data-sbmincart-idx="0"
                                                   type="text" pattern="[0-9]*"  @if(isset($item['value'])) value="{{$item['value']}}"@else value="{{$item['quantity']}}" @endif
                                                   autocomplete="off"></div>
                                        <div class="sbmincart-details-price"><span
                                                class="sbmincart-price price">{{$item['price']}}</span></div></li>
                                        @endforeach
                                        <div class="footer1">
                                            <div class="total">Subtotal: {{$total}}đ</div>
                                            <a href="{{route('cart')}}" class="pay">Pay
                                            </a>
                                            <a href="{{route('paydetail')}}" class="pay" style=" left: 15rem;width: 50px;">Detail
                                            </a>
                                        </div>
                                        @else
                                            <div class="footer1">
                                                <p class="sbmincart-empty-text">Your shopping cart is empty</p>
                                            </div>
                                    @endif
                        </ul>
                    </a>
                </div>
        </div>
    </div>
</div>
<!-- //header -->
