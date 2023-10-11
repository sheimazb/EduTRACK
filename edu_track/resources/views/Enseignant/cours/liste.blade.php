<!-- Dashboard Enseignant-->
@extends('layouts.master_enseignant')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="card mt-30">
                        <div class="card-body">
                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="adv-table-table__header">
                                        <h4>Data Table</h4>
                                        <div class="adv-table-table__button">
                                            <div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle atbd-select" href="#"
                                                   role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    Export
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">copy</a>
                                                    <a class="dropdown-item" href="#">csv</a>
                                                    <a class="dropdown-item" href="#">print</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="filter-form-container"></div>
                                    <table class="table mb-0 table-borderless adv-table" data-sorting="true"
                                           data-filter-container="#filter-form-container" data-paging-current="1"
                                           data-paging-position="right" data-paging-size="10">
                                        <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">#</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Nom du fichier</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Extension</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Département</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Classe</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">Action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($cours as $c)
                                            <tr>
                                                <td class="footable-first-visible"
                                                    style="display: table-cell;">
                                                    <div
                                                        class="userDatatable-content">{{$loop->iteration}}</div>
                                                </td>
                                                <td style="display: table-cell;">
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>{{$c->nom}} </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="display: table-cell;">
                                                    <div class="userDatatable-content">
                                                        @if($c->extension==='pdf')
                                                            <img class="wh-50" src="{{asset('images/pdf.png')}}" alt="">
                                                        @elseif($c->extension==='docx')
                                                            <img class="wh-50" src="{{asset('images/doc.png')}}" alt="docx">
                                                        @elseif($c->extension==='png')
                                                            <img class="wh-50" src="{{asset('images/jpg.png')}}" alt="Photo">
                                                        @endif
                                                    </div>
                                                </td>
                                                <td style="display: table-cell;">
                                                    <div class="userDatatable-content">
                                                        {{$c->Classe->Departement->nom}}
                                                    </div>
                                                </td>
                                                <td style="display: table-cell;">
                                                    <div class="userDatatable-content">
                                                        {{$c->Classe->nom}}
                                                    </div>
                                                </td>
                                                <td class="footable-last-visible"
                                                    style="display: table-cell;">
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="{{route('enseignant.cour',$c->id)}}" class="view" target="_blank">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     width="24" height="24"
                                                                     viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor"
                                                                     stroke-width="2"
                                                                     stroke-linecap="round"
                                                                     stroke-linejoin="round"
                                                                     class="feather feather-eye">
                                                                    <path
                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12"
                                                                            r="3"></circle>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                            @include('includes.empty')
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

