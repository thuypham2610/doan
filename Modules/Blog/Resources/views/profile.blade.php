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
                <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <i>/</i></li>
                <li>Profile</li>
            </ul>
        </div>
    </div>
    <div style="margin: 2.5rem;display: block;float:left" class="register col-md-12">
        <div class="col-sm-5">
        <form action="{{ route('updateprofile') }}" method="post">
            @csrf
            <div>
                <input name="username" placeholder="Username" type="text" style="width: 26rem" value="{{Auth::user()->username}}">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="email" placeholder="Email" type="text" style="width: 26rem" value="{{Auth::user()->email}}">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="address" placeholder="Address" type="text" style="width: 26rem" value="{{Auth::user()->address}}">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="birthday" placeholder="Birthday" type="date" style="width: 26rem" value="{{Auth::user()->birthday}}">
            </div>
            <div style="margin-top: 1.5rem">
                <input name="phone" placeholder="Phone" type="text" style="width: 26rem" value="{{Auth::user()->phone}}">
            </div>
            <div class="sign-up">
                <input type="submit" value="Save" style="width: 5rem"/>
            </div>
        </form>
        </div>
        <div class="col-sm-7">
            <img src="{{Module::asset('admin:dist/img/27585811288_21b8b07111_k.jpg')}}" alt=" " class="img-responsive" style="height: 400px;width: 800px;text-align: center"/>
        </div>
    </div>


@endsection
