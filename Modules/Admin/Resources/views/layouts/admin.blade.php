<!DOCTYPE html>
<html>
@include('admin::layouts.admin.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin::layouts.admin.header')
    @include('admin::layouts.admin.sidebar')
    <div class="content-wrapper">
        @include('admin::layouts.admin.content-header')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin::layouts.admin.footer')
</div>
@include('admin::layouts.admin.scripts')
</body>
</html>
