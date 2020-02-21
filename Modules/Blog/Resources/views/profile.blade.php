@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <h3>Electronic Store, <span>Special Offers</span></h3>
        </div>
    </div>
    <!-- //banner -->

    <div style="margin: 2.5rem;display: block;float:left;" class="register col-md-12">
        <form action="{{ route('postLogin') }}" method="post">
            @csrf
            <div>
                <input name="username" placeholder="Username" type="text" style="width: 30%">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="username" placeholder="Username" type="text" style="width: 30%">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="username" placeholder="Username" type="text" style="width: 30%">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="username" placeholder="Username" type="text" style="width: 30%">
            </div>
            <div class="sign-up">
                <input type="submit" value="Sign in" style="width: 10%"/>
            </div>
        </form>
    </div>
@endsection
