
@extends('layouts.master')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="row">
            <div class="col-lg-12">
                <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                    <div class="ap-tab-wrapper border-bottom ">
                        <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Info personnelle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Info professionnelle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Info sociale</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-sm-6 col-10">
                                    <div class="mt-40 mb-50">
                                        <div class="user-tab-info-title mb-40 text-capitalize">
                                            <h5 class="fw-500">Information Personnelle </h5>
                                        </div>
                                        <div class="account-profile d-flex align-items-center mb-4 ">
                                            <div class="ap-img pro_img_wrapper">
                                                <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                                <!-- Profile picture image-->
                                                <label for="file-upload">
                                                    <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{asset('images/chaima.jpeg')}}" alt="profile">
                                                    <span class="cross" id="remove_pro_pic">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                                            </span>
                                                </label>
                                            </div>
                                            <div class="account-profile__title">
                                                <h6 class="fs-15 ml-20 fw-500 text-capitalize">photo de profile</h6>
                                            </div>
                                        </div>
                                        <div class="edit-profile__body">
                                            <form>
                                                <div class="form-group mb-25">
                                                    <label for="name1">Nom d'utilisateur</label>
                                                    <input type="text" class="form-control" name="user" value=" {{$etudiant->user}}">
                                                </div>

                                                <div class="form-group mb-25 form-group-calender">
                                                    <label for="datepicker">Date de naissance</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control hasDatepicker" name="dateN" value="{{$etudiant->dateN}}">
                                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></a>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="name3">Carte d'identité</label>
                                                    <input type="text" class="form-control" name="cin"  value="{{$etudiant->cin}}" >
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="phoneNumber5">Téléphone</label>
                                                    <input type="tel" class="form-control" name="telephone" value="{{$etudiant->telephone}}" placeholder="+216 25 46 52 36">
                                                </div>

                                                <div class="form-group mb-25">
                                                    <div class="countryOption">
                                                        <label for="countryOption">Civilité</label><br>
                                                        <input type="radio" name="civilité" value="H" {{$etudiant->civilite=='H' ? 'checked' : ''}} > <label for="huey">Homme</label>
                                                        <input type="radio"  name="civilité" value="F" {{$etudiant->civilite=='F' ? 'checked' : ''}} > <label for="huey">Femme</label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="name2">nationnalité</label>
                                                    <input type="text" class="form-control" name="nationnalite" value="{{$etudiant->nationnalite}}">
                                                </div>

                                                <div class="form-group select-px-15" data-select2-id="28">
                                                    <label for="countryOption" class="il-gray fs-14 fw-500 align-center">Gouvernorat</label>
                                                    <select class="form-control px-15 select2-hidden-accessible" name="gouvernorat" id="countryOption" data-select2-id="countryOption" tabindex="-1" aria-hidden="true">
                                                        <option value="mahdia" {{$etudiant->gouvernorat=="mahdia" ? 'selected' : ''}}>Mahdia</option>
                                                        <option value="monastir" {{$etudiant->gouvernorat=="monastir" ? 'selected' : ''}}>Monastir</option>
                                                        <option value="sfax" {{$etudiant->gouvernorat=="sfax" ? 'selected' : ''}}>Sfax</option>
                                                        <option value="sousse" {{$etudiant->gouvernorat=="sousse" ? 'selected' : ''}}>Sousse</option>
                                                        <option value="tunis" {{$etudiant->gouvernorat=="tunis" ? 'selected' : ''}}>Tunis</option>
                                                    </select>  </div>


                                                <div class="button-group d-flex pt-25 justify-content-end">



                                                    <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">cancel
                                                    </button>








                                                    <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save &amp; Next
                                                    </button>





                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-sm-6 col-10">
                                    <div class="mt-40 mb-50">
                                        <div class="user-tab-info-title mb-35 text-capitalize">
                                            <h5 class="fw-500">Information éducative</h5>
                                        </div>
                                        <div class="edit-profile__body">
                                            <form>
                                                <div class="form-group mb-25">
                                                    <label for="name2">E-mail</label>
                                                    <input type="email" class="form-control" name="email" value="{{$etudiant->email}}">
                                                </div>



                                                <div class="form-group mb-25 status-radio">
                                                    <label class="mb-15" for="phoneNumber2">statut</label>
                                                    <div class="d-flex">
                                                        <div class="radio-horizontal-list d-flex flex-wrap">
                                                            @if($etudiant->is_accepted==1)
                                                                        <span class="radio-text">Accepté</span>
                                                            @else
                                                                    <span class="radio-text">bloqué</span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-group d-flex pt-20 justify-content-end">



                                                    <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">cancel
                                                    </button>








                                                    <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save &amp; Next
                                                    </button>





                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-sm-6 col-10">
                                    <div class="user-social-profile mt-40 mb-50">
                                        <div class="user-tab-info-title mb-40 text-capitalize">
                                            <h5>Profils sociaux</h5>
                                        </div>
                                        <div class="edit-profile__body">
                                            <form>
                                                <div class=" mb-30">
                                                    <label for="socialUrl">Linkedin</label>
                                                    <div class="input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-facebook border-facebook text-white wh-44 radius-xs justify-content-center" id="addon-wrapping1">
                                                                        <i class="lab la-facebook-f fs-18"></i>
                                                                    </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping1" id="socialUrl">
                                                    </div>
                                                </div>
                                                <div class=" mb-30">
                                                    <label for="twitterUrl">twitter</label>
                                                    <div class="input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-twitter border-twitter text-white wh-44 radius-xs justify-content-center" id="addon-wrapping2">
                                                                        <i class="lab la-twitter fs-18"></i>
                                                                    </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control--social" placeholder="@Username" aria-label="Username" aria-describedby="addon-wrapping2" id="twitterUrl">
                                                    </div>
                                                </div>
                                                <div class=" mb-30">
                                                    <label for="webUrl">Website</label>
                                                    <div class="input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-ruby border-ruby text-white wh-44 radius-xs justify-content-center" id="addon-wrapping3">
                                                                        <i class="las la-basketball-ball fs-18"></i>
                                                                    </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control--social" placeholder="Url" aria-label="Username" aria-describedby="addon-wrapping3" id="webUrl">
                                                    </div>
                                                </div>

                                                <div class=" mb-30">
                                                    <label for="githubUrl">github</label>
                                                    <div class="input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-dark border-dark  text-white wh-44 radius-xs justify-content-center" id="addon-wrapping5">
                                                                        <i class="lab la-github fs-18"></i>
                                                                    </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping5" id="githubUrl">
                                                    </div>
                                                </div>
                                                <div class=" mb-30">
                                                    <label for="mediumUrl">medium</label>
                                                    <div class="input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-dark border-dark text-white wh-44 radius-xs justify-content-center" id="addon-wrapping6">
                                                                        <i class="lab la-medium fs-18"></i>
                                                                    </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control--social" placeholder="Username" aria-label="medium" aria-describedby="addon-wrapping6" id="mediumUrl">
                                                    </div>
                                                </div>
                                                <div class="button-group d-flex pt-20 justify-content-end">



                                                    <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">back
                                                    </button>

                                                    <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save profile
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

