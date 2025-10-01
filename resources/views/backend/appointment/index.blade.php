@extends('backend.partials.master')
@section('title')
{{ ___('menus.appointment') }}
@endsection
@section('maincontent')
<!-- wrapper  -->
<div class="container-fluid  dashboard-content">
    <!-- pageheader -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">{{ ___('label.dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">{{ ___('common.appointment') }}</a></li>
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link active">{{ ___('label.list') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end pageheader -->
    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="j-parcel-main j-parcel-res">
                <div class="card">

                    <div class="card-header mb-3">
                        <h4 class="title-site">{{ ___('common.appointment') }}</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg">
                                    <tr>
                                        <th>{{ ___('#') }}</th>
                                        <th>{{ ___('label.patient_name') }}</th>
                                        <th>{{ ___('label.patient_phone') }}</th>
                                        <th>{{ ___('label.doctor_name') }}</th>
                                        <th>{{ ___('label.day') }}</th>
                                        <th>{{ ___('label.date') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($appointments as $key => $appointment)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$appointment->patient_name}}</td>
                                        <td>{{$appointment->phone_number}}</td>
                                        <td>{{$appointment->doctor->name}}(<span class="text-muted fst-italic small d-inline-block ms-1">{{$appointment->doctor->specialization}}, {{$appointment->doctor->qualification}}</span>)</td>
                                        <td>{{$appointment->day}}</td>
                                        <td>{{$appointment->created_at }}</td>
                                    </tr>
                                    @empty
                                    <x-nodata-found :colspan="6" />
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- pagination component -->
                        {{-- @if($appointments)
                        <x-paginate-show :items="$appointments" />
                        @endif --}}
                        <!-- pagination component -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end data table  -->
    </div>
</div>
<!-- end wrapper  -->
@endsection()
