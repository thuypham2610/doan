<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{Module::asset('admin:dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">An Dương</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Module::asset('admin:dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{!! \Illuminate\Support\Facades\Auth::user()->username !!}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class='nav-item has-treeview'><a href="" class='nav-link'>
                        <i class='nav-icon far fa-id-badge text-warning'></i>
                        <p>User<i class='right fas fa-angle-left'></i></p></a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item '><a href="{!! route('userlist') !!}" class='nav-link'>
                                <i class='far fa-circle nav-icon'></i>
                                <p>List</p></a></li>
                        <li class='nav-item '><a href="{!! route('regist1') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>Add</p></a></li>
                    </ul>
                </li>
                <li class='nav-item '><a href="" class='nav-link '>
                        <i class='nav-icon fas fa-table text-danger'></i>
                        <p>Product<i class='right fas fa-angle-left'></i></p></a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item '><a href="{!! route('prolist') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>List</p></a></li>
                        <li class='nav-item '><a href="{!! route('addproduct') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>Add</p></a></li>
                    </ul>
                </li>
                <li class='nav-item '><a href="" class='nav-link '>
                        <i class='nav-icon far fa-plus-square'></i>
                        <p>Category<i class='right fas fa-angle-left'></i></p></a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item '><a href="{!! route('catelist') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>List</p></a></li>
                        <li class='nav-item '><a href="{!! route('addcate') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>Add</p></a></li>
                    </ul>
                </li>
                <li class='nav-item '><a href="" class='nav-link '>
                        <i class='nav-icon fab fa-artstation text-success'></i>
                        <p>Trademark<i class='right fas fa-angle-left'></i></p></a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item '><a href="{!! route('tradelist') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>List</p></a></li>
                        <li class='nav-item '><a href="{!! route('addtrade') !!}" class='nav-link '>
                                <i class='far fa-circle nav-icon'></i>
                                <p>Add</p></a></li>
                    </ul>
                </li>
                <li class='nav-item '><a href="{!! route('orderlist') !!}" class='nav-link '>
                        <i class='nav-icon fas fa-compass'></i>
                        <p>Order</p></a>
                </li>
                <li class='nav-item '><a href="{!! route('detaillist') !!}" class='nav-link '>
                        <i class='nav-icon fas fa-atom'></i>
                        <p>Order Detail</p></a>
                </li>
                <li class='nav-item '><a href="{!! route('statistic') !!}" class='nav-link '>
                        <i class='nav-icon fas fa-chart-pie'></i>
                        <p>Statistic</p></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
