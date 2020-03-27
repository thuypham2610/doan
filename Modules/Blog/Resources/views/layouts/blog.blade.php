<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('blog::layouts.blog.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('blog::layouts.blog.header')
    @include('blog::layouts.blog.navigation')
    @yield('content')
    @include('blog::layouts.blog.footer')
</div>
@include('blog::layouts.blog.script')
</body>
</html>
