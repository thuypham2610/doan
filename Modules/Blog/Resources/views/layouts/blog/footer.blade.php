<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Contact</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>Ha Noi City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">thuypham12049@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>035 778 3399</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Information</h3>
                <ul class="info">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="mail.html">Contact Us</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="faq.html">FAQ's</a></li>
                    <li><a href="products.html">Special Products</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Category</h3>
                <ul class="info">
                    <?php
                    $cate = \App\Category::query()->get()->toArray();
                    $cate = json_decode(json_encode($cate), 1);
                    ?>
                    @foreach($cate as $item)
                        <li><a href="{{route('catefilter',['id'=>$item['id']])}}">{!! $item['name'] !!}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('all')}}">Today's Deals</a></li>
                </ul>
                <h4>Follow Us</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                        <li><a href="#" class="google"> </a></li>
                        <li><a href="#" class="pinterest"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="{{Module::asset('blog:images/arrow.png')}}" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div class="container">
            <p>&copy; 2020 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">Thuy</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
