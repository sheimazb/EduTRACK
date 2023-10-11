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
                                        Liste des enseignants

                                        <div class="action-btn">
                                            <a style="background-color: #0a0326; border-color: #0a0326"
                                               class=" btn btn-sm btn-primary btn-add"
                                               href="{{route('enseignant.ajoute')}}">
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                                <i class="la la-plus"></i> Ajouter enseignant</a>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-borderless">
                                                    <thead>
                                                    <tr class="userDatatable-header">
                                                        <th>
                                                            <div class="d-flex align-items-center">
                                                                <div class="custom-checkbox  check-all">
                                                                    <input class="checkbox" type="checkbox"
                                                                           id="check-3">
                                                                    <label for="check-3">
                                                                        <span class="checkbox-text userDatatable-title">Enseignant</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">E-maill</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">Carte d'identité</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">Télephone</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">Date d'embauche</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">Statut</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title float-right">Action</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($enseignants as $enseignant)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="userDatatable__imgWrapper d-flex align-items-center">
                                                                        <div class="checkbox-group-wrapper">
                                                                            <div class="checkbox-group d-flex">
                                                                                <div
                                                                                    class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                                    <input class="checkbox"
                                                                                           type="checkbox"
                                                                                           id="check-grp-12">
                                                                                    <label for="check-grp-12"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"
                                                                           class="profile-image rounded-circle d-block m-0 wh-38"
                                                                           style="background-image:url('{{asset($enseignant->path)}}'); background-size: cover;"></a>
                                                                    </div>
                                                                    <div class="userDatatable-inline-title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>{{$enseignant->nom}}{{$enseignant->prenom}}</h6>
                                                                        </a>
                                                                        <p class="d-block mb-0">
                                                                            {{$enseignant->titre}}
                                                                            ,{{$enseignant->diplome}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td id="{{$enseignant->id}}">

                                                                <div class="userDatatable-content">

                                                                    {{$enseignant->email}}


                                                                </div>

                                                            </td>

                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    {{$enseignant->cin}}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    {{$enseignant->telephone}}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    {{$enseignant->dateE}}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content d-inline-block">
                                                                    <span id="status_{{$enseignant->id}}"
                                                                          class="bg-opacity-{{$enseignant->is_active==1 ? 'success': 'danger'}}  color-{{$enseignant->is_active==1 ? 'success': 'danger'}} rounded-pill userDatatable-content-status active">{{$enseignant->is_active? 'Active' : 'pas active'}}</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                    <li>
                                                                        <div
                                                                            class="custom-control custom-switch switch-primary switch-md "
                                                                            style="margin:8px">
                                                                            <input value="{{$enseignant->id}}"
                                                                                   onchange="updateStatus(this)"
                                                                                   type="checkbox"
                                                                                   class="custom-control-input"
                                                                                   id="switch-s{{$enseignant->id}}" {{ $enseignant->is_active ? 'checked' : ''}}>

                                                                            <label class="custom-control-label"
                                                                                   for="switch-s{{$enseignant->id}}"></label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('enseignant.show',$enseignant->id)}}"
                                                                           class="edit">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-edit">
                                                                                <path
                                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                                <path
                                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </li>


                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <script>
                                            function updateStatus(el) {
                                                if (el.checked) {
                                                    var is_active = 1
                                                } else {
                                                    var is_active = 0
                                                }
                                                $.ajax({
                                                    type: "post",
                                                    dataType: "json",
                                                    url: '{{ route('update.status.enseignant') }}',
                                                    data: {
                                                        'is_active': is_active,
                                                        'id': el.value,
                                                        '_token': '{{ csrf_token() }}',
                                                    },
                                                    success: function (data) {
                                                        const element = document.getElementById("status_" + data.id);
                                                        if (data.response === 'success') {
                                                            console.log(data.id);
                                                            if (data.status === 'Active') {
                                                                element.classList.remove('bg-opacity-danger', 'color-danger', 'rounded-pill', 'userDatatable-content-status', 'active');
                                                                element.classList.add('bg-opacity-success', 'color-success', 'rounded-pill', 'userDatatable-content-status', 'active');
                                                                $('#status_' + data.id).html(data.status);
                                                            } else if (data.status === 'Pas Active') {
                                                                element.classList.remove('bg-opacity-success', 'color-success', 'rounded-pill', 'userDatatable-content-status', 'active');
                                                                element.classList.add('bg-opacity-danger', 'color-danger', 'rounded-pill', 'userDatatable-content-status', 'active');
                                                                $('#status_' + data.id).html(data.status);
                                                            }
                                                        }
                                                        console.log(data.success)
                                                    }
                                                });
                                            }

                                        </script>
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

