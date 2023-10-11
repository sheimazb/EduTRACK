<!-- Dashboard Enseignant-->
@extends('layouts.master_enseignant')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="global-shadow border px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 mb-30">
                                <div class="card">
                                    <div class="card-header color-dark fw-500">
                                        Ajouter un cours
                                    </div>
                                    <div class="card-body">
                                        <div class="userDatatable global-shadow border-0 bg-white w-100">

                                            <form method="post" action="{{route('upload.cours')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="inputNameIcon"
                                                               class=" col-form-label color-dark fs-14 fw-500 align-center">Sélectionner
                                                            un classe</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="selectpicker" id="class_ids" name="class_id">
                                                            @foreach ($departements as $departement)
                                                                <optgroup label="{{$departement->nom??''}}"
                                                                          data-id="{{$departement->id??''}}">
                                                                    @if(isset($departement->Classes))
                                                                        @forelse($departement->Classes as $classe)
                                                                            <option
                                                                                value="{{($classe->id??'')}}">{{($classe->nom??'')}}</option>
                                                                        @empty
                                                                            <option
                                                                                value="0">{{('Aucune class')}}</option>
                                                                        @endforelse
                                                                    @endif
                                                                </optgroup>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button
                                                            style="background-color: #82a641; border-color: rgb(117,143,63) ; margin-top: 10px"
                                                            type="submit" class="btn btn-primary btn-xs btn-squared ">
                                                            Ajouter
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="atbd-upload">
                                                        <div class="atbd-upload-avatar media-import">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-upload">
                                                                <path
                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                                <line x1="12" y1="3" x2="12" y2="15"></line>
                                                            </svg>
                                                             <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <span data-feather="upload"></span> Click to Upload</a>
                                                        </div>
                                                        <div class="avatar-up">
                                                            <input type="file" name="fileUpload" class="upload-one" id="upload-1">
                                                        </div>
                                                        <div class="atbd-upload__file">
                                                            <ul>

                                                            </ul>
                                                        </div>
                                                    </div>
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
@endsection

