@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <h3>Electronic Store, <span>Special Offers</span></h3>
        </div>
    </div>
    <!-- //banner -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="http://doan.local/blog"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <i>/</i></li>
                <li>Pay</li>
            </ul>
        </div>
    </div>
    <div class="register" style="margin: auto;width: 425px;margin-top: 30px;">
        <form action="{{route('pay')}}" method="post">
            @csrf
            <input placeholder="Name" name="name" type="text" required="">
            <input placeholder="Email Address" name="email" type="email" required="" style=" margin-bottom: 14px;">
            <input placeholder="Phone" name="phone" type="text" required="" style=" margin-bottom: 14px;">
            <input placeholder="Address" name="address" type="text" required="">
            <div class="sign-up">
                <input type="submit" value="Pay"/>
            </div>
        </form>
    </div>
@endsection
