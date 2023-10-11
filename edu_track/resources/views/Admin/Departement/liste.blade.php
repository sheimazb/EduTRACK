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
                                        Liste des departements

                                        <div class="action-btn">
                                            <a style="background-color: #590606; border-color: #590606"
                                               class=" btn btn-sm btn-primary btn-add" id="v-pills-profile-tab"
                                               data-toggle="pill" href="#v-pills-profile" role="tab"
                                               aria-controls="v-pills-profile" aria-selected="false">
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                                <i class="la la-plus"></i> Ajouter departement</a>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                 aria-labelledby="v-pills-profile-tab">
                                                <form method="post" action="{{route('departement.ajout')}}">
                                                    @csrf
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label for="inputNameIcon"
                                                                   class=" col-form-label color-dark fs-14 fw-500 align-center">Nom
                                                                de departement</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text"
                                                                   class="form-control  ih-medium ip-gray radius-xs b-light"
                                                                   name="nom" placeholder="inforamatique">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <button
                                                                style="background-color: #82a641; border-color: rgb(117,143,63) ; margin-top: 10px"
                                                                type="submit"
                                                                class="btn btn-primary btn-xs btn-squared ">Ajouter
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
                                                                        <span class="checkbox-text userDatatable-title">#</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <span
                                                                class="userDatatable-title">Nom des departements</span>
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
                                                    @forelse($departements as $dep)
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
                                                                {{$dep->nom}}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="userDatatable-content d-inline-block">
                                                                <span id="status_{{$dep->id}}"
                                                                    class="bg-opacity-{{$dep->is_active==1 ? 'success': 'danger'}}  color-{{$dep->is_active==1 ? 'success': 'danger'}}  rounded-pill userDatatable-content-status active" >{{$dep->is_active==1 ? 'Active': 'Pas active'}}</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="custom-control custom-switch switch-primary switch-md "
                                                                style="margin:8px">
                                                                <input  value="{{$dep->id}}"  onchange="updateStatus(this)" type="checkbox" class="custom-control-input" id="switch-s{{$dep->id}}" {{ $dep->is_active ? 'checked' : '' }}>


                                                                <label class="custom-control-label"
                                                                       for="switch-s{{$dep->id}}"></label>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    @empty
                                                        NO DATA
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                                <script>
                                                    function updateStatus(el){
                                                        if(el.checked){
                                                            var is_active = 1
                                                        }else{
                                                            var is_active = 0
                                                        }
                                                        $.ajax({
                                                            type: "post",
                                                            dataType: "json",
                                                            url: '{{ route('statut.departement') }}',
                                                            data: {
                                                                'is_active': is_active,
                                                                'id': el.value,
                                                                '_token': '{{ csrf_token() }}',
                                                            },
                                                            success: function(data){
                                                                const element = document.getElementById("status_"+data.id);
                                                                if(data.response==='success'){
                                                                    console.log(data.id);
                                                                    if(data.status==='Active'){
                                                                        element.classList.remove('bg-opacity-danger','color-danger','rounded-pill','userDatatable-content-status','active');
                                                                        element.classList.add('bg-opacity-success','color-success','rounded-pill','userDatatable-content-status','active');
                                                                        $('#status_'+data.id).html(data.status);
                                                                    }else if(data.status==='Pas Active'){
                                                                        element.classList.remove('bg-opacity-success','color-success','rounded-pill','userDatatable-content-status','active');

                                                                        element.classList.add('bg-opacity-danger','color-danger','rounded-pill','userDatatable-content-status','active');
                                                                        $('#status_'+data.id).html(data.status);
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

