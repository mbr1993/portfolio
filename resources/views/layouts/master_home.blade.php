<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ryan - vCard / Resume / CV Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="vCard & Resume Template"/>
    <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio"/>
    <meta name="author" content="beshleyua"/>

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/gradient.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/new-skin/new-skin.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/template-colors/green.css') }}"/>

    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <link rel="shortcut icon" href="{{ asset('images/favicons/favicon.ico') }}">
</head>

<body>
<div class="page new-skin">

    <!-- preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- background -->
    <div class="background gradient">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!--
        Container
    -->
    <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

        <!--menu-->
@include('layouts.site.menu')

        <!--Card - Started-->
        <div class="card-started" id="home-card">

            <!--Profile-->
            <div class="profile">

                <!-- profile image -->
                <div class="slide" style="background-image: url(images/man5_big.jpg);"></div>

                <!-- profile photo -->
                <div class="image">
                    <img src="{{ asset('images/profile.png') }}" alt=""/>
                </div>

                <!-- profile titles -->
                <div class="title">Ryan Adlard</div>
                <div class="subtitle">Web Designer</div>

                <!-- profile socials -->
                <div class="social">
                    <a target="_blank" href="https://dribbble.com/"><span class="fab fa-dribbble"></span></a>
                    <a target="_blank" href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
                    <a target="_blank" href="https://github.com/"><span class="fab fa-github"></span></a>
                    <a target="_blank" href="https://www.spotify.com/"><span class="fab fa-spotify"></span></a>
                    <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a>
                </div>

                <!-- profile buttons -->
                <div class="lnks">
                    <a href="#" class="lnk">
                        <span class="text">Download CV</span>
                        <span class="ion ion-archive"></span>
                    </a>
                    <a href="#" class="lnk discover">
                        <span class="text">Contact Me</span>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
        </div>

@yield('content')

    </div>
</div>

<!--
    jQuery Scripts
-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>

Main Scripts
-->
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
