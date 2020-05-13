@extends('blog::layouts.blog')

@section('content')
<style>
    .pay_1 {
        font-family: Arial;
        font-size: 17px;
        padding: 20px;
    }

    * {
        box-sizing: border-box;
    }

    .row_pay {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 30%;
        /* IE10 */
        flex: 30%;
    }

    .col-50 {
        -ms-flex: 50%;
        /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 40%;
        /* IE10 */
        flex: 40%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container_pay {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    .input_pay {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .col-50 label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .col-25 .container_pay a {
        color: #2196F3;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row_pay {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>
<div class="pay_1 container">
    <h2>Responsive Checkout Form</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
    <div class="row_pay">
        <div class="col-75">
            <div class="container_pay">
                <form action="{{route('pay')}}" method="POST">
                    @csrf
                    <div class="row_pay">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input class="input_pay" type="text" id="name" name="name" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input class="input_pay" type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input class="input_pay" type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input class="input_pay" type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input class="input_pay" type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Phone</label>
                                    <input class="input_pay" type="text" id="zip" name="phone" placeholder="000-000-0000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container_pay">
                <?php $content = Cart::getContent()->toArray();
                $total = 0;
                $items = 0;
                ?>
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>

                @foreach($content as $item)
                <?php
                    if (isset($item['value']))
                    {
                        $total += $item['price'] * $item['value'];
                        $items +=$item['value'];
                    }
                    else
                    {
                        $total += $item['price'] * $item['quantity'];
                        $items +=$item['quantity'];
                    }
                ?>
                <p><a href="{{route('detail',['id'=>$item['id']])}}">{{$item['name']}}</a> <span class="price">{{$item['price']}}đ</span></p>
                @endforeach
                <hr>
                <p>Total:  <span class="price" style="color:black"><b>{{ $items }}</b></span></p>
                <p>Total Price: <span class="price" style="color:black"><b>{{ $total }}</b></span></p>
            </div>
        </div>
    </div>
</div>
@endsection
