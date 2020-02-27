@extends('blog::layouts.blog')

@section('content')
    <!-- banner -->
    <div class="banner banner10">
        <div class="container">
            <h2>Mail Us</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Mail Us</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3>Mail Us</h3>
            <div class="agile_mail_grids">
                <div class="col-md-5 contact-left">
                    <h4>Address</h4>
                    <p>Hãy liên hệ với chúng tôi.
                        <span>Change your life</span></p>
                    <ul>
                        <li>Phone :+84 35 778 3399</li>
                        <li><a href="mailto:info@example.com">thuypham12049@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-7 contact-left">
                    <h4>Contact Form</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Your Name" required="">
                        <input type="email" name="Email" placeholder="Your Email" required="">
                        <input type="text" name="Telephone" placeholder="Telephone No" required="">
                        <textarea name="message" placeholder="Message..." required=""></textarea>
                        <input type="submit" value="Submit" >
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="contact-bottom">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.472089564892!2d105.73227131530004!3d21.053798892297998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455af9072ccf9%3A0xadb5f7555c46683d!2zxJDhuqFpIEjhu41jIEPDtG5nIE5naGnhu4dwIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1582771027008!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!-- //mail -->
@endsection
