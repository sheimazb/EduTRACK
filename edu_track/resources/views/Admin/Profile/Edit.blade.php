<!-- Profile Admin-->
@extends('layouts.master')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-3 col-lg-4 col-sm-5">
                    <!-- Profile Acoount -->
                    <div class="card mb-25">
                        <div class="card-body text-center p-0">

                            <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                
                                <div class="ap-nameAddress pb-3">
                                    <h5 class="ap-nameAddress__title">{{$admin->nom}} {{$admin->prenom}}</h5>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">Propriétaire</p>
                                </div>
                            </div>
                            <div class="ps-tab p-20 pb-25">
                                <div class="nav flex-column text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Account
                                        setting</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>change password</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Ajoute un membre</a>
                                    <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>notification</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Profile Acoount End -->
                </div>
                <div class="col-xxl-9 col-lg-8 col-sm-7">
                    <div class="as-cover">
                        <div class="as-cover__imgWrapper">
                            <input id="file-upload1" type="file" name="fileUpload" class="d-none">
                            <label for="file-upload1">
                                <img src="{{asset('images/ap-header.png')}}" alt="image" class="w-100" style="height: 150px">
                                <span class="ap-cover__changeImgBtn">
                                            <span class="btn btn-outline-primary cover-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>Change
                                                Cover</span>
                                        </span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-50">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile mt-25">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>Account setting</h6>
                                                <span class="fs-13 color-light fw-400">Update your username and manage your
                                                            account</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form method="post" action="{{route('updateInformation.admin',$admin->id)}}" enctype="multipart/form-data">
                                                        @csrf 
                                                        <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                                        <div class="ap-img mb-20 pro_img_wrapper">
                                                            <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                                            <label for="file-upload">
                                                                <!-- Profile picture image-->
                                                                <img class="ap-img__main rounded-circle wh-120" src="{{asset($admin->path)}}" alt="profile">
                                                                <span class="cross" id="remove_pro_pic">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                                <label for="name1">Nom d'Utilisateur</label>
                                                                <input type="text" class="form-control" name="nom" value="{{$admin->prenom}} {{$admin->nom}}">
                                                               
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" name="email" value="{{$admin->email}}">
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-35 mb-35">


                                                                <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Sauvegarder les modifications
                                                                </button>

                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">Annuler
                                                                </button>


                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="d-flex justify-content-between mt-1 align-items-center flex-wrap">
                                                        <div class="text-capitalize py-10">
                                                            <h6>Fermer le compte</h6>
                                                            <span class="fs-13 color-light fw-400">Supprimer votre compte et les données de votre compte </span>
                                                        </div>
                                                        <div class="my-sm-0 my-10 py-10">

                                                            <button class="btn btn-danger btn-default btn-squared fw-400 text-capitalize">Fermer le compte
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Profile End -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile mt-25">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>change password</h6>
                                                <span class="fs-13 color-light fw-400">Change or reset your account
                                                            password</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form action="{{route('profile.change.password')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mb-20">
                                                                <label for="name">Ancien mot de passe</label>
                                                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" >
                                                          
                                                                @error('current_password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{$message}}</strong>
                                                                    </span>
                                                                @enderror

                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="password-field">Nouveau mot de passe</label>
                                                                <div class="position-relative">
                                                                    <input name="password" type="password" class="form-control pr-50 @error('password') is-invalid @enderror" required value="secret">
                                                                    <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alerte">
                                                                         <strong>{{$message}} </strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                                <small id="passwordHelpInline" class="text-light fs-13">Minimum
                                                                    6
                                                                    characters
                                                                </small>
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="name">Confirmez le mot de passe</label>
                                                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"required name="confirm_password" id="confirm_password">
                                                          
                                                                @error('confirm_password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{$message}}</strong>
                                                                    </span>
                                                                @enderror

                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-45 mb-35">

                                                                <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Save Changes
                                                                </button>

                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Profile End -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile edit-social mt-25">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>Utilisateur et autorisation</h6>
                                             </div>
                                            <div class="action-btn">
                                                <a style="background-color: #590606; border-color: #590606" class=" btn btn-sm btn-primary btn-add" id="v-pills-profile-tab1" data-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile" aria-selected="false"><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                                    <i class="la la-plus"></i> Ajouter un membre</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="userDatatable global-shadow border-0 bg-white w-100">
                                                    <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile-tab1">
                                                        <form action="{{route('ajout.admin')}}" method="post" enctype="multipart/form-data" >
@csrf
                                                        <div class="col-sm-6 d-flex aling-items-center">
                                                                <div class="col-sm-3">
                                                                        <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Nom</label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                    <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" name="nom" placeholder="xxx">
                                                                    
                                                                    </div><br><br>
                                                                    <div class="col-sm-3">
                                                                        <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Prénom</label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" name="prenom" placeholder="yyy" >
                                                                       
                                                                    </div>
                                                                   
                                                                </div>
<br><br>
                                                                <div class="col-sm-6 d-flex aling-items-center">
                                            
                                                                    <div class="col-sm-3">
                                                                        <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">E-mail</label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                    <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" name="email" placeholder="exemple@gmail.com">
                                                                   
                                                                </div>
                                            
                                                                    <div class="col-sm-3">
                                                                        <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Mot de passe</label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light" name="password" placeholder="mot de passe" >
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button style="background-color: #82a641; border-color: rgb(117,143,63) ; margin-top: 10px" type="submit" class="btn btn-primary btn-xs btn-squared ">Ajouter</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                        <table class="table mb-0">
                                                            <thead>
                                                            <tr class="userDatatable-header">
                                                                <th>
                                                                    <span class="userDatatable-title">Nom</span>
                                                                </th>
                                                                <th>
                                                                    <span class="userDatatable-title">Email</span>
                                                                </th>
                                                                <th>
                                                                    <span class="userDatatable-title">Rôle</span>
                                                                </th>
                                                                <th>
                                                                    <span class="userDatatable-title">Action</span>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                           @foreach($admins as $adm)
                                                            <tr>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        
                                                                      {{$adm->nom}}  {{$adm->prenom}}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                    {{$adm->email}}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        propriétaire
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        <button class="btn btn-danger  btn-xs btn-squared ">Supprimer
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                            </tbody>
                                                        </table>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Profile End -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile edit-social mt-25">
                                    <div class="card">
                                        <div class="card-header px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>social profiles</h6>
                                                <span class="fs-13 color-light fw-400">Add elsewhere links to your
                                                            profile</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="notification-content p-25 border mb-25">
                                                <div class="notification-content__title d-flex justify-content-between flex-wrap pb-20 text-capitalize">
                                                    <h6 class="fs-15 text-light fw-500 lh-normal">Notifications</h6>
                                                    <a class="text-primary fs-13" href="#">toggle all</a>
                                                </div>
                                                <div class="global-shadow radius-xl bg-white">
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Company News</h6>
                                                                <span>Get company news, announcements, and product
                                                                            updates</span>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc1">
                                                                <label class="custom-control-label" for="nc1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Meetups Near You</h6>
                                                                <span>Get company news, announcements, and product
                                                                            updates</span>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc2">
                                                                <label class="custom-control-label" for="nc2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Opportunities</h6>
                                                                <span>Get company news, announcements, and product
                                                                            updates</span>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc3">
                                                                <label class="custom-control-label" for="nc3"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Weekly Newsletters</h6>
                                                                <span>Get company news, announcements, and product
                                                                            updates</span>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc4">
                                                                <label class="custom-control-label" for="nc4"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-content p-25 border mb-25">
                                                <div class="notification-content__title d-flex justify-content-between flex-wrap pb-20 text-capitalize">
                                                    <h6 class="fs-15 text-light fw-500 lh-normal">Account Activity</h6>
                                                    <a class="text-primary fs-13" href="#">toggle all</a>
                                                </div>
                                                <div class="global-shadow radius-xl bg-white">
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Anyone seeing my profile page</h6>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc5">
                                                                <label class="custom-control-label" for="nc5"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Anyone follow me</h6>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc6">
                                                                <label class="custom-control-label" for="nc6"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Someone mentions me</h6>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc7">
                                                                <label class="custom-control-label" for="nc7"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25 border-bottom">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Someone accepts my invitation</h6>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc8">
                                                                <label class="custom-control-label" for="nc8"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-content__body p-25">
                                                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                            <div class="div">
                                                                <h6>Anyone send me a message</h6>
                                                            </div>
                                                            <div class="custom-control custom-switch my-lg-0 my-10">
                                                                <input type="checkbox" class="custom-control-input" id="nc9">
                                                                <label class="custom-control-label" for="nc9"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex flex-wrap pt-25 mb-25">



                                                <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Update notification Profiles
                                                </button>








                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                </button>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Edit Profile End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

