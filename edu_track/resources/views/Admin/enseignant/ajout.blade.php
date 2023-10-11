@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@extends('layouts.master')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="row">
            <div class="col-lg-12">
                <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                    <div class="ap-tab-wrapper border-bottom ">
                        <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                   role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Info personnelle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                   role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                    Info professionnelle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                   href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                   aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-share-2">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                    </svg>
                                    Désignation</a>
                            </li>
                        </ul>
                    </div>

                    <form method="post" action="{{route('enseignant.store')}}" enctype="multipart/form-data">
                        <input type="hidden" name="enseignant_id" value="{{$enseignant->id??'-1'}}">
                        @csrf
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-sm-6 col-10">
                                        <div class="mt-40 mb-50">
                                            <div class="user-tab-info-title mb-40 text-capitalize">
                                                <h5 class="fw-500">Information Personnelle </h5>
                                            </div>
                                            <div class="account-profile d-flex align-items-center mb-4 ">
                                                <div class="ap-img pro_img_wrapper">
                                                    <input id="file-upload" type="file" name="fileUpload"
                                                           class="d-none">
                                                    <!-- Profile picture image-->
                                                    <label for="file-upload">
                                                        <img
                                                            class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                                            src="" alt="profile">
                                                        <span class="cross" id="remove_pro_pic">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-camera"><path
                                                                        d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle
                                                                        cx="12" cy="13" r="4"></circle></svg>
                                                            </span>
                                                    </label>
                                                </div>
                                                <div class="account-profile__title">
                                                    <h6 class="fs-15 ml-20 fw-500 text-capitalize">photo de profile</h6>
                                                </div>
                                            </div>
                                            <div class="edit-profile__body">

                                                <div class="form-group mb-25">
                                                    <label for="name1">Nom</label>
                                                    <input type="text" class="form-control" name="nom"
                                                           placeholder="Duran Clayton" value="{{$enseignant->nom??''}}">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="name2">Prénom</label>
                                                    <input type="text" class="form-control" name="prenom"
                                                           placeholder="sample@email.com"
                                                           value="{{$enseignant->prenom??''}}">
                                                </div>
                                                <div class="form-group mb-25 form-group-calender">
                                                    <label for="datepicker">Date de naissance</label>
                                                    <div class="position-relative">
                                                        <input type="date" class="form-control hasDatepicker"
                                                               name="dateN" placeholder="Septembre 20, 2018"
                                                               value="{{$enseignant->dateN??''}}">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="name3">Carte d'identité</label>
                                                    <input type="text" class="form-control" name="cin"
                                                           placeholder="Example" value="{{$enseignant->cin??''}}">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="phoneNumber5">Numéro de télephone</label>
                                                    <input type="tel" class="form-control" name="telephone"
                                                           placeholder="+216 25 46 52 36"
                                                           value="{{$enseignant->telephone??''}}">
                                                </div>

                                                <div class="form-group mb-25">
                                                    <div class="countryOption">
                                                        <label for="countryOption">Civilité</label><br>
                                                        <input type="radio" name="civilite"
                                                               value="{{$enseignant->civilite??'H'}}"> <label
                                                            for="huey">Homme</label>
                                                        <input type="radio" name="civilite"
                                                               value="{{$enseignant->civilite??'F'}}"> <label
                                                            for="huey">Femme</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-sm-6 col-10">
                                        <div class="mt-40 mb-50">
                                            <div class="user-tab-info-title mb-35 text-capitalize">
                                                <h5 class="fw-500">Information professionnelle</h5>
                                            </div>
                                            <div class="edit-profile__body">
                                                <div class="form-group mb-25">
                                                    <label for="name2">E-mail</label>
                                                    <input type="email" class="form-control" name="email"
                                                           placeholder="sample@email.com"
                                                           value="{{$enseignant->email??''}}">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="phoneNumber1">Années d'experiance</label>
                                                    <input type="text" class="form-control" name="experiance"
                                                           placeholder="Design" value="{{$enseignant->experience??''}}">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="phoneNumber">Diplôme</label>
                                                    <input type="text" class="form-control" name="diplome"
                                                           placeholder="UI Designrt"
                                                           value="{{$enseignant->diplome??''}}">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="phoneNumber">Titre professionnelle</label>
                                                    <input type="text" class="form-control" name="titre"
                                                           placeholder="UI Designrt" value="{{$enseignant->titre??''}}">
                                                </div>
                                                <div class="form-group mb-25 form-group-calender">
                                                    <label for="datepicker">Date d'embauche</label>
                                                    <div class="position-relative">
                                                        <input type="date" class="form-control hasDatepicker"
                                                               name="dateE" placeholder="Septembre 20, 2018"
                                                               value="{{$enseignant->dateE??''}}">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25 status-radio">
                                                    <label class="mb-15" for="phoneNumber2">statut</label>
                                                    <div class="d-flex">
                                                        <div class="radio-horizontal-list d-flex flex-wrap">

                                                            <div class="radio-theme-default custom-radio ">
                                                                <input class="radio" type="radio" name="statut"
                                                                       value="0" id="radio-hl2">
                                                                <label for="radio-hl2">
                                                                    <span class="radio-text">Accepté</span>
                                                                </label>
                                                            </div>


                                                            <div class="radio-theme-default custom-radio ">
                                                                <input class="radio" type="radio" name="statut"
                                                                       value="0" id="radio-hl3">
                                                                <label for="radio-hl3">
                                                                    <span class="radio-text">bloqué</span>
                                                                </label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-sm-6 col-10">
                                        <div class="user-social-profile mt-40 mb-50">
                                            <div class="user-tab-info-title mb-40 text-capitalize">
                                                <h5>Désignation</h5>
                                            </div>
                                            <select class="selectpicker" id="class_ids" name="class_ids[]" >
                                                @foreach ($departements as $departement)
                                                    <optgroup label="{{$departement->nom??''}}"
                                                              data-id="{{$departement->id??''}}">
                                                        @if(isset($departement->Classes))
                                                            @forelse($departement->Classes as $classe)
                                                                <option
                                                                    value="{{($classe->id??'')}}">{{($classe->nom??'')}}</option>
                                                            @empty
                                                                <option value="0">{{('Aucune class')}}</option>
                                                            @endforelse
                                                        @endif
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                            <style>
                                                .dropdown-header {
                                                    display: block;
                                                    padding: 0.5rem 1.5rem;
                                                    margin-bottom: 0;
                                                    font-size: 20px;
                                                    color: #000000;
                                                    white-space: nowrap;
                                                    font-weight: bold;
                                                }
                                            </style>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9"></div>
                            <div class="col-lg-3" style="padding-bottom: 10px;">
                                <button
                                    type="submit"
                                    class="btn btn-success btn-xs btn-squared ">Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script>


                <!-- Latest compiled and minified JavaScript -->

            </script>
        </div>

@endsection




