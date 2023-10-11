@include('sweetalert::alert')
<!DOCTYPE html>
<body lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduTrack </title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{asset('css/plugin.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.ico')}}">
    <script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/54/2/intl/fr_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/54/2/intl/fr_ALL/util.js"></script></head>
</body>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Formulaire de pré-inscription</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <a href="{{route('admin.login')}}" class="btn btn-sm btn-primary btn-add">
                                    <i class="la la-plus"></i> Se connecter</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
                <div class=" checkout wizard7 global-shadow border px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-12">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-sm-10">
                                    <div class="card checkout-shipping-form px-30 pt-2 pb-30 border-color">

                                        <div class="card-body p-0">
                                            <div class="edit-profile__body">
                                                <form method="post" action="{{route('etudiant.inscrit')}}">
                                                    @csrf<br>
                                                    <h4>1. Créer votre compte</h4><br>
                                                    <div class="form-group">
                                                        <label for="user">Nom utilisateur</label>
                                                        <input type="text" class="form-control" name="user" placeholder="nom d'utilisateur">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Adresse email</label>
                                                        <input type="text" class="form-control" name="email" placeholder="adresse e-mail">
                                                    </div>
                                                    <h4>2. Veuillez configurer votre profil</h4><br>
                                                    <div class="form-group">
                                                        <label for="nom">Nom</label>
                                                        <input type="text" class="form-control" name="nom" placeholder="nom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prenom">Prénom</label>
                                                        <input type="text" class="form-control" name="prenom" placeholder="prenom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cin">Carte d'idendité</label>
                                                        <input type="text" class="form-control" name="cin" placeholder="CIN">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dataN">Date de naissance </label>
                                                        <input type="date" class="form-control" name="dateN" placeholder="date de naissance">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telephone">Téléphone </label>
                                                        <input type="text" class="form-control" name="telephone" placeholder="numéro de télephone">
                                                    </div>
                                                <div>
                                                <label >Civilité</label>

                                                    <div class="radio-horizontal-list d-flex">

                                                    <div class="radio-theme-default custom-radio ">
                                                        <input class="radio" type="radio" name="civilite" value="H" id="radio-vl1">
                                                        <label for="radio-vl1">
                                                            <span class="radio-text">Homme</span>
                                                        </label>
                                                    </div>
                                                    <div class="radio-theme-default custom-radio ">
                                                        <input class="radio" type="radio" name="civilite" value="F" id="radio-vl2">
                                                        <label for="radio-vl2">
                                                            <span class="radio-text">Femme</span>
                                                        </label>
                                                    </div>
                                                    </div> </div>

                                                    <div class="form-group">
                                                        <label>Nationnalité</label>
                                                        <input type="text" class="form-control" name="nationnalite" placeholder="nationnalité">
                                                    </div>
                                                    <div class="atbd-select ">
                                                    <label >Gouvernorat</label>
                                                            <select  name="gouvernorat" class="form-control  form-control-default">
                                                                <option value="monastir">Monastir</option>
                                                                <option value="sousse">Sousse</option>
                                                                <option value="mahdia">Mahdia</option>
                                                                <option value="tunis">Tunis</option>
                                                                <option value="sfax">Sfax</option>
                                                            </select>
                                                        </div>

                                                    <div class="button-group d-flex pt-3 justify-content-between flex-wrap">
                                                        <button type="submit" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save &amp; Next <i class="ml-10 mr-0 las la-arrow-right"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- ends: .card -->
                                </div><!-- ends: .col -->
                            </div>
                        </div><!-- ends: col -->
                    </div>
                </div><!-- ends: .global-shadow -->
            </div>
<div class="daterangepicker ltr show-ranges opensright"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/script.min.js')}}"></script>


</div>
</body>
</html>
