@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <h3>Electronic Store, <span>Special Offers</span></h3>
        </div>
    </div>
    <!-- //banner -->
    <style>
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .cart-items {
            width: 100%;
            border-top: 1px solid #7dcbb6;
            -webkit-transition: height 0.3s ease-in;
            -moz-transition: height 0.3s ease-in;
            transition: height 0.3s ease-in;
        }

        .cart-items .product-item {
            position: relative;
            width: 55%;
            font-size: 0;
            padding-right: 0;
        }

        .cart-items .product-item-details {
            width: 75%;
            padding: 0 30px 0 20px;
        }

        .cart-item .product-item-details span {
            display: block;
            float: left;
        }

        .pay_a{
            color: #7dcbb6;
            text-decoration: none;
        }

        .cart-title {
            margin: 5px 0;
            font-size: 16px;
        }

        table {
            background: transparent;
            color: #5c5c5c;
            border: 1px solid #7dcbb6;
            border-top: none;
            border-radius: 2px;
            border-collapse: separate;
        }

        .cart-items th {
            padding: 20px 30px 20px 0;
            font-size: 12px;
            text-align: right;
            border-bottom: 1px solid #7dcbb6;
        }

        .cart-items th.first {
            text-align: left;
            padding-left: 30px;
        }

        tr td:first-child, tr th:first-child {
            border-left: none;
        }

        th {
            font-size: 16px;
            background: #fff;
            color: #787878;
            font-family: Roboto, sans-serif;
            font-weight: 400;
        }

        .cart-form {
            max-width: 1260px;
            margin: 40px auto;
            padding: 0 30px;
        }

        .cart-item .image, .cart-item .product-item-details {
            display: inline-block;
            vertical-align: middle;
            font-size: 14px;
        }

        .cart-item .image {
            width: 25%;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: 0;
            width: 8rem;
            height: 8rem;
            margin-left: 3rem;
        }

        .cart-item {
            -webkit-transition: opacity 0.3s ease-in, height 0.3s ease-in;
            -moz-transition: opacity 0.3s ease-in, height 0.3s ease-in;
            transition: opacity 0.3s ease-in, height 0.3s ease-in;
        }

        .cart-item-properties {
            font-size: 12px;
            font-family: Lato, sans-serif;
            font-weight: 400;
            color: #8a8a8a;
        }

        .cart-item .remove {
            position: absolute;
            top: 13px;
            left: 10px;
            font-size: 15px;
            color: #8a8a8a;
            -webkit-font-smoothing: antialiased;
        }

        .price {
            float: left;
        }

        td {
            display: table-cell;
            vertical-align: inherit;
        }

        .cart-item .price, .cart-item .quantity, .cart-item .total1 {
            width: 15%;
            text-align: right;
        }

        .cart-form input[type="text"], input[type="email"], input[type="password"], input[type="search"], input[type="telephone"], input[type="tel"], input[type="number"], textarea {
            -webkit-appearance: none;
            border: 1px solid #7dcbb6;
            color: #5c5c5c;
            display: block;
            padding: 10px 12px;
            max-width: 340px;
            width: 100%;
            border-radius: 2px;
            background: #fff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .cart-item .quantity input {
            display: inline-block;
            width: 50px;
            text-align: center;
        }

        .cart-price {
            margin: 0;
            line-height: 1;
            font-size: 30px;
            font-family: Roboto, sans-serif;
            color: #828282;
        }

        .cart-totals {
            text-align: right;
            padding-left: 40px;
            width: 100%;
            padding-top: 2rem;
        }

        .button, .submit, button, input[type="submit"], input[type="button"] {
            background: #7dcbb6;
            font-family: "Source Sans Pro", sans-serif;
            font-weight: 700;
            color: #fff;
            -webkit-appearance: none;
            display: inline-block;
            cursor: pointer;
            border: none;
            text-align: center;
            line-height: normal;
            padding: 15px 20px;
            border-radius: 2px;
            font-size: 14px;
            -webkit-transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -moz-transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            font-size: 13px;
        }
    </style>
    <script type="text/javascript">
        function updateCart(quantity,id) {
            $.get(
                '{{asset('blog/update')}}',
                {quantity:quantity,id:id},
                function () {
                    location.reload();
                }
            );
        }
    </script>
    <div>
        <form class="cart-form" action="">
            @csrf
            <table class="cart-items">
                <thead>
                <tr>
                    <th class="first">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th class="last">Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $content = Cart::getContent()->toArray();
                $total = 0;
                ?>
                @foreach($content as $item)

                    @csrf
                    <?php
                        if (isset($item['value']))
                         $total += $item['price'] * $item['value'];
                        else
                            $total += $item['price'] * $item['quantity'];
                    $img = \App\Product::query()->select('picture','quantity')->where('id', $item['id'])->first()->toArray();
                    ?>
                    <tr class="cart-item variant-44161625418 first last" data-variant="44161625418"
                        data-title="ChaChaga: Pure Chaga Tea" data-url="/products/chaga-tea">
                            <td class="product-item">
                                <a class="image pay_a" href="{{route('detail',['id'=>$item['id']])}}">
                                    <img alt=""
                                         src="{{Module::asset('admin:dist/img/')}}/{{$img['picture']}}">
                                </a>
                                <div class="product-item-details">
                                <span class="cart-title">
                                    <a class="pay_a" href="{{route('detail',['id'=>$item['id']])}}" title="">{{$item['name']}}</a>
                                </span>
                                    <div class="cart-item-properties">
                                    </div>
                                </div>
                                <a class="remove pay_a" href="{{route('delete',['id'=>$item['id']])}}">x</a>
                            </td>
                            <td class="price" style="line-height: 13rem" data-title="Price">
                                <span class="money">{{$item['price']}}đ</span>
                            </td>
                            <td class="quantity" data-title="Quantity">
                                <input type="number" @if(isset($item['value'])) value="{{$item['value']}}" @else value="{{$item['quantity']}}" @endif onchange="updateCart(this.value,'{{$item['id']}}')" min="1" max="{{$img['quantity']}}">
                            <td class="total1 last" data-title="Total">
                                <span class="money">@if(isset($item['value'])) {{$item['price']*$item['value']}}đ @else {{$item['price']*$item['quantity']}}đ @endif</span>
                            </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="cart-totals">
                <p class="cart-price"><span class="money">{{$total}}đ</span></p>
                <a class="cart-checkout button pay_a" href="{{route('cart')}}">Pay</a>
            </div>
        </form>
    </div>
@endsection
