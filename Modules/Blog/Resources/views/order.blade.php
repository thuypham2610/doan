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

    .pay_a {
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

    tr td:first-child,
    tr th:first-child {
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

    .cart-item .image,
    .cart-item .product-item-details {
        display: inline-block;
        vertical-align: middle;
        font-size: 14px;
    }

    .cart-item .image {
        width: 25%;
    }

    .img {
        vertical-align: middle;
    }

    .img {
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

    .cart-item .price,
    .cart-item .quantity,
    .cart-item .total1 {
        width: 15%;
        text-align: right;
    }

    .cart-form input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="search"],
    input[type="telephone"],
    input[type="tel"],
    input[type="number"],
    textarea {
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

    .button,
    .submit,
    button,
    input[type="submit"],
    input[type="button"] {
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
<div>
    <?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    $content = DB::select('SELECT  doan.order.id,doan.order.total_price,doan.order.status From doan.`order` Where user_id = ?', [Auth::user()->id]);
    $content = json_decode(json_encode($content), 1);
    ?>

    @foreach($content as $item)
    <?php
    $pro = DB::select('SELECT doan.products.name,doan.products.price,doan.products.picture,doan.order_detail.quantity
                FROM doan.products inner join doan.order_detail on doan.products.id = doan.order_detail.product_id 
                where doan.order_detail.order_id = ?', [$item['id']]);
    $pro = json_decode(json_encode($pro), 1);
    ?>
    <form class="cart-form" action="">
        @csrf
        <h2>ID order: <strong>{{ $item['id'] }}</strong></h2>
        <h4>Status: @if($item['status']==1) <span style="color: blue">Confirmed</span> @else <span style="color: red">Đang đợi xác nhận @endif</span></h4>
        <table class="cart-items">
            <thead>
                <tr>
                    <th style="text-align: center" class="first">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th style="padding-right: 77px;">Total</th>
                    <th class="last">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pro as $pro)
                <tr class="cart-item variant-44161625418 first last" data-variant="44161625418" data-title="ChaChaga: Pure Chaga Tea" data-url="/products/chaga-tea">
                    <td class="product-item">
                        <a class="image" href="/products/chaga-tea">
                            <img alt="" src="{{Module::asset('admin:dist/img/')}}/{{$pro['picture']}}" class="img">
                        </a>
                        <div class="product-item-details">
                            <span class="cart-title">
                                <a href="/products/chaga-tea" title="">{{$pro['name']}}</a>
                            </span>
                            <div class="cart-item-properties">
                            </div>
                        </div>
                    </td>
                    <td class="price" style="line-height: 13rem" data-title="Price">
                        <span class="money">{{$pro['price']}}đ</span>
                    </td>
                    <td class="quantity" data-title="Quantity" style="padding-left: 89px;text-align: center;">
                        <span class="money">{{$pro['quantity']}}</span>
                    <td class="total1 last" data-title="Total" style="padding-right: 46px;">
                        <span class="money">{{ $pro['price']*$pro['quantity'] }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart-totals">
            <p class="cart-price"><span class="money">{{ $item['total_price'] }}</span></p>
            @if ($item['status']==0)
                <a class="cart-checkout button pay_a" href="{{route('deleteorder',['id'=>$item['id']])}}">Abort</a>
            @endif
        </div>
    </form>
    @endforeach
</div>
@endsection