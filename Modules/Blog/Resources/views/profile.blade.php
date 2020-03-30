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
    <div class="container bootstrap snippet">
    <div class="row">
    <div class="col-sm-10"><h1>{{ Auth::user()->username }}</h1></div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div><br>
            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
            </div>
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul> 
            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                </div>
            </div>
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="{{ route('updateprofile') }}" method="post" id="registrationForm">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Full name</h4></label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>User name</h4></label>
                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
            
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
            
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="text" class="form-control" id="location" name="address" placeholder="somewhere" value="{{ Auth::user()->address }}" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div><!--/tab-pane-->
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
@endsection
