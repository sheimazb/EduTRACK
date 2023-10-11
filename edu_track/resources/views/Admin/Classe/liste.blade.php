<!-- classes-->
<!-- Section Departement-->

@extends('layouts.master')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start: product page -->
                    <div class="global-shadow border px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 mb-30">
                                <div class="card">
                                    <div class="card-header color-dark fw-500">
                                        Liste des classes
                                        <div class="action-btn">
                                            <a style="background-color: #590606; border-color: #590606"
                                               class=" btn btn-sm btn-primary btn-add" id="v-pills-profile-tab"
                                               data-toggle="pill" href="#v-pills-profile" role="tab"
                                               aria-controls="v-pills-profile" aria-selected="false">
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                                <i class="la la-plus"></i> Ajouter un classe</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div style="margin-top: 20px; margin-left: 50px">
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                 aria-labelledby="v-pills-profile-tab">

                                                <form method="post" action="{{route('classe.ajout')}}">
                                                    @csrf
                                                    <div class="form-group row mb-25">

                                                        <div class="atbd-select col-sm-6  ">
                                                            <label style="color: #01192d">Departement</label>

                                                            <select class="form-control " id="countryOption"
                                                                    data-select2-id="countryOption" tabindex="-1"
                                                                    aria-hidden="false" name="dep_id" style="margin: 9px">
                                                                @foreach($departement as $dep)
                                                                    <option value="{{$dep->id}}">{{$dep->nom}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label style="color: #01192d"><b>Nom de classe</b></label>
                                                            <input type="text"
                                                                   class="form-control  ih-medium ip-gray radius-xs b-light"
                                                                   name="nom" placeholder="1er">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <button
                                                                style="background-color: #82a641; border-color: rgb(117,143,63) ; margin-top: 40px"
                                                                type="submit"
                                                                class="btn btn-primary btn-xs btn-squared ">Ajouter
                                                            </button>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-borderless">
                                                <thead>
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <div class="d-flex align-items-center">
                                                            <div class="custom-checkbox  check-all">
                                                                <input class="checkbox" type="checkbox" id="check-3">
                                                                <label for="check-3">
                                                                    <span
                                                                        class="checkbox-text userDatatable-title">#</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Nom de classe</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Nom de departement</span>
                                                    </th>

                                                    <th>
                                                        <span class="userDatatable-title float-right">Nombre des etudiants</span>
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($classes as $classe)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="userDatatable__imgWrapper d-flex align-items-center">
                                                                    <div class="checkbox-group-wrapper">
                                                                        <div class="checkbox-group d-flex">
                                                                            <div
                                                                                class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                                <input class="checkbox" type="checkbox"
                                                                                       id="check-grp-12">
                                                                                <label for="check-grp-12"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="userDatatable-inline-title">
                                                                    <a href="#" class="text-dark fw-500">
                                                                        <h6>{{$loop->iteration}}</h6>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$classe->nom}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$classe->Departement->nom}}
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="userDatatable-content" style="text-align: center">
                                                                20
                                                            </div>
                                                        </td>

                                                    </tr>

                                                @empty
                                                    @include('includes.empty',['column' => 5])
                                                @endforelse

                                                </tbody>
                                            </table>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- ends: col-lg-8 -->
                        </div>
                    </div>
                    <!-- End: Product page -->
                </div>
                <!-- ends: col-lg-12 -->
            </div>
        </div>

    </div>
@endsection

