<!-- navigation -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}" class="act">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <?php
                                        $cate = \App\Category::query()->get()->toArray();
                                        $cate = json_decode(json_encode($cate), 1);
                                        ?>
                                        <h6>Category</h6>
                                        @foreach($cate as $item)
                                            <li><a href="{{route('catefilter',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <?php
                                        $trade = \App\Trademark::query()->get()->toArray();
                                        $trade = json_decode(json_encode($trade), 1);
                                        ?>
                                        <h6>Trademark</h6>
                                        @foreach($trade as $item)
                                            <li><a href="{{route('filter',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('mailus')}}">Mail Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
