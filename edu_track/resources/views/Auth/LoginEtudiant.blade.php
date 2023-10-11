<html lang="en" dir="ltr"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduTrack</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{asset('css/plugin.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
</head>

<body class="loaded">
<main class="main-content">

    <div class="signUP-admin">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                    <div class="signUP-admin-left signIn-admin-left position-relative" style="background-color: rgb(10,3,38);width: 650px">
                        <div class="signUP-overlay">
                            <img class="svg signupTop" src="{{asset('images/svg/signuptop.html')}}" alt="img1">

                        </div><!-- End: .signUP-overlay  -->
                        <div class="signUP-admin-left__content">
                            <div  class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a style="background-color: #ffb700" class="wh-36  text-white radius-md mr-10 content-center" href="index-2.html">E</a>
                                <span  class="text-light">EduTrack</span>
                            </div>
                            <h1 style="color: whitesmoke">La meilleur application de consultation & de téléchargement de cours</h1>
                        </div><!-- End: .signUP-admin-left__content  -->
                        <!-- <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{asset('images/svg/signupIllustration.svg')}}" alt="img">
                        </div> End: .signUP-admin-left__img  -->
                    </div><!-- End: .signUP-admin-left  -->
                </div><!-- End: .col-xl-4  -->
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                    <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-12">
                                <div class="edit-profile mt-md-25 mt-0">
                                    <div class="card border-0">
                                        <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                            <div class="edit-profile__title">
                                                <h6>Login <span class="color-primary" style="color: #1f490d" ></span></h6>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="edit-profile__body">
                                                <form method="post" action="{{ route('submit-Form') }}">
                                                    @csrf
                                                <div class="form-group mb-20">
                                                    <label for="username">E-mail</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Username">
                                                </div>
                                                <div class="form-group mb-15">
                                                    <label for="password-field">Mot de passe</label>
                                                    <div class="position-relative">
                                                        <input id="password-field" type="password" class="form-control" name="password" >
                                                        <div class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></div>
                                                    </div>
                                                </div>
                                                <div class="signUp-condition signIn-condition">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-1">
                                                        <label for="check-1">
                                                            <span class="checkbox-text">Gardez-moi connecté</span>
                                                        </label>
                                                    </div>
                                                    <a href="{{route('etudiant.signIN')}}">Créer un compte !</a>
                                                </div>
                                                <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                               <button type="submit" class="btn  btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn "> login</button>
                                                   <!-- <button  style="background-color: #590606;" class="btn  btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                        <a href="{{route('etudiant.dashboard')}}" style="color: whitesmoke">Login</a>
                                                    </button>-->
                                                </div>

                                                </form>
                                            </div>
                                        </div><!-- End: .card-body -->
                                    </div><!-- End: .card -->
                                </div><!-- End: .edit-profile -->
                            </div><!-- End: .col-xl-5 -->
                        </div>
                    </div><!-- End: .signUp-admin-right  -->
                </div><!-- End: .col-xl-8  -->
            </div>
        </div>
    </div><!-- End: .signUP-admin  -->

</main>
<div id="overlayer" style="display: none;">
        <span class="loader-overlay" style="display: none;">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
</div>

<!-- inject:js-->

<script src="js/plugins.min.js"></script>

<script src="js/script.min.js"></script>

<!-- endinject-->



</body></html>
