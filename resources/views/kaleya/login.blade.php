<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPK SMPN 29 Jakarta | Login</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Jolly Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tags -->


    <!-- font-awesome icons -->
    <link rel="stylesheet" href="/login/css/font-awesome.min.css" />

    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="/login/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->

    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>

<h1>Pemiihan Calon Ketua OSIS SMPN 29 Jakarta</h1>

<div class="main-w3">
    <form action="{{route('home.store')}}" method="post">
        {{csrf_field()}}
        <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
        <div class="login-w3ls">
            <div class="icons">

                <input type="email" name="email" placeholder="Email" required="">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="icons">

                <input type="password" name="password" placeholder="Password" required="">
                <span class="fa fa-key" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="btnn">
                <button type="submit">Login</button><br>
            </div>
        </div>
    </form>

</div>

<div class="copy">
    <p>&copy;2017 Jolly Login Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
</div>

<script src="{{ asset('acara/bower_components/jquery/dist/jquery.min.js') }} "></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('acara/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
</body>
</html>