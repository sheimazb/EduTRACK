<!doctype html>
<html lang="en" dir="ltr">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduTrack</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{asset('css/plugin.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

</head>
<body class="layout-light side-menu overlayScroll">
@include('includes.header_etudiant')


<main class="main-content">

    @include('includes.Sidebar_etudiant')
    @yield('content')
    @include('includes.footer')
</main>
<div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary" style="background-color: #ffb700"></span>
                <span class="spin-dot badge-dot dot-primary" style="background-color: #590606"></span>
                <span class="spin-dot badge-dot dot-primary" style="background-color: #053c8a"></span>
                <span class="spin-dot badge-dot dot-primary"style="background-color: #0d5e16"></span>
            </div>
        </span>
</div>
<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>

<a href="#" class="customizer-trigger">
    <span data-feather="settings"></span></a>
<div class="customizer-wrapper">
    <div class="customizer">
        <div class="customizer__head">
            <h4 class="customizer__title">Customizer</h4>
            <span class="customizer__sub-title">Customize your overview page layout</span>
            <a href="#" class="customizer-close">
                <span data-feather="x"></span></a>
        </div>
        <div class="customizer__body">
            <div class="customizer__single">
                <h4>Layout Type</h4>
                <ul class="customizer-list d-flex layout">
                    <li class="customizer-list__item">
                        <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr" class="active">
                            <img src="img/ltr.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item">
                        <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl">
                            <img src="img/rtl.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ends: .customizer__single -->

            <div class="customizer__single">
                <h4>Sidebar Type</h4>
                <ul class="customizer-list d-flex l_sidebar">
                    <li class="customizer-list__item">
                        <a href="#" data-layout="light" class="active">
                            <img src="img/light.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item">
                        <a href="#" data-layout="dark">
                            <img src="img/dark.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ends: .customizer__single -->

            <div class="customizer__single">
                <h4>Navbar Type</h4>
                <ul class="customizer-list d-flex l_navbar">
                    <li class="customizer-list__item">
                        <a href="#" data-layout="side" class="active">
                            <img src="img/side.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                    <li class="customizer-list__item top">
                        <a href="#" data-layout="top">
                            <img src="img/top.png" alt="">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ends: .customizer__single -->
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
<!-- inject:js-->
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/script.min.js')}}"></script>
<!-- endinject-->


</html>
