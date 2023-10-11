<!-- Dashboard Enseignant-->
@extends('layouts.master_enseignant')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            Liste des classes
                        </div>
                        <div class="card-body">

                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="projectDatatable-title">Classe</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title">Departement</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title">date de début</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title">Assigné à</span>
                                            </th>

                                            <th>
                                                <span class="projectDatatable-title">achèvement</span>
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($enseignants->TeacherClassroom as $enseignant)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6 style="text-align: center">{{$enseignant->nom}}</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                            <h6 style="text-align: center">{{$enseignant->Departement->nom}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{$enseignant->created_at}}
                                                    </div>
                                                </td>

                                                <td>

                                                    <ul class="d-flex user-group-people__parent align-content-center">
                                                        @foreach($etudiants as $etudiant)
                                                            @if($etudiant->path_image != null)
                                                                <li>
                                                                    <a href="#"><img class="rounded-circle wh-34"
                                                                                     src="{{asset($etudiant->path_image)}}"
                                                                        ></a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>

                                                </td>

                                                <td>
                                                    <div class="project-progress d-flex align-items-center">

                                                        <div class="user-group-progress-bar">

                                                            <div class="progress-wrap d-flex align-items-center mb-0">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-primary"
                                                                         role="progressbar" style="width: 30%;"
                                                                         aria-valuenow="30" aria-valuemin="0"
                                                                         aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="progress-percentage">30%</span>
                                                            </div>
                                                            <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks
                                                                completed</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            Vide
                                        @endforelse
                                        </tbody>
                                    </table><!-- End: .table -->
                                </div>
                            </div><!-- End: .userDatatable -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

