<!-- Dashboard Enseignant-->
@extends('layouts.master_enseignant')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="breadcrumb-main user-member justify-content-sm-between ">
                                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                            <div
                                                class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                                                <h4 class="text-capitalize fw-500 breadcrumb-title">Mes etudiants</h4>
                                                <span class="sub-title ml-sm-25 pl-sm-25">
                                                        {{$nombreEtudiants}}
                                                    etudiant
                                                </span>
                                            </div>

                                            <form action="https://demo.jsnorm.com/"
                                                  class="d-flex align-items-center user-member__form my-sm-0 my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                                <input class="form-control mr-sm-2 border-0 box-shadow-none" name
                                                       type="search" placeholder="Rechercher par nom" aria-label="Search">
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($etudiants as $etudiant)
                                    @if($etudiant->is_accepted == 1)
                                        <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">

                                            <!-- Profile Acoount -->
                                            <div class="card">
                                                <div class="card-body text-center pt-30 px-25 pb-0">
                                                    <div class="account-profile-cards  ">
                                                        <div class="ap-img d-flex justify-content-center">
                                                            <!-- Profile picture image-->
                                                            <img
                                                                class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 "
                                                                src="{{asset($etudiant->path_image)}}" alt="profile">
                                                        </div>
                                                        <div class="ap-nameAddress">
                                                            <h6 class="ap-nameAddress__title">{{$etudiant->user}}</h6>
                                                            <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">2eme |
                                                                infomatique </p>
                                                        </div>
                                                        <div
                                                            class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                                                            <button type="button"
                                                                    class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-mail">
                                                                    <path
                                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                                </svg>
                                                                message
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Profile Acoount End -->
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

