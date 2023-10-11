<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
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
                                       Liste d'attente
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
                                                                    <input class="checkbox" type="checkbox" id="check-3">
                                                                    <label for="check-3">
                                                                        <span class="checkbox-text userDatatable-title">Etudiant</span>
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
                                                            <span class="userDatatable-title">Date d'adhésion</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title">Status</span>
                                                        </th>
                                                        <th>
                                                            <span class="userDatatable-title float-right">Action</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($etudiants as $etudiant)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                    <div class="checkbox-group-wrapper">
                                                                        <div class="checkbox-group d-flex">
                                                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                                <input class="checkbox" type="checkbox" id="check-grp-12">
                                                                                <label for="check-grp-12"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{asset($etudiant->path)}}' ); background-size: cover;" alt="profile"></a>
                                                                </div>
                                                                <div class="userDatatable-inline-title">
                                                                    <a href="#" class="text-dark fw-500">
                                                                        <h6>{{$etudiant->user}}</h6>
                                                                    </a>
                                                                    <p class="d-block mb-0">
                                                                        {{$etudiant->gouvernorat}},{{$etudiant->nationnalite}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$etudiant->email}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$etudiant->cin}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$etudiant->telephone}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content">
                                                                {{$etudiant->created_at}}
                                                            </div>
                                                        </td>
                                                        <td id="status_{{$etudiant->id}}">
                                                            <div class="userDatatable-content d-inline-block">
                                                                <span class="bg-opacity-info  color-info rounded-pill userDatatable-content-status active">{{ $etudiant->is_accepted ? 'Accepté' : 'En attente' }}</span>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <div class="custom-control custom-switch switch-success switch-md ">
                                                                <input  value="{{$etudiant->id}}"  onchange="updateStatus(this)" type="checkbox" class="custom-control-input" id="switch-s{{$etudiant->id}}" {{ $etudiant->is_accepted ? 'checked' : '' }}>
                                                                <label class="custom-control-label" for="switch-s{{$etudiant->id}}"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <script>
                                                    function updateStatus(el){
                                                        if(el.checked){
                                                            var is_accepted = 1
                                                        }else{
                                                            var is_accepted = 0
                                                        }
                                                        $.ajax({
                                                            type: "post",
                                                            dataType: "json",
                                                            url: '{{ route('update.status') }}',
                                                            data: {
                                                                'is_accepted': is_accepted,
                                                                'id': el.value,
                                                                '_token': '{{ csrf_token() }}',
                                                            },
                                                            success: function(data){
                                                                console.log(data.response,'status')
                                                                if(data.response==='success'){
                                                                    console.log(data.id);
                                                                    $('#status_'+data.id).html(data.status);

                                                                }
                                                                console.log(data.success)
                                                            }
                                                        });
                                                    }

                                                </script>
                                            </div>
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

