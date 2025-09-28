@extends('backend.partials.master')
@section('title')
{{ ___('menus.contact_us_messages') }}
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
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">{{ ___('common.contact_us_message') }}</a></li>
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
                        <h4 class="title-site">{{ ___('common.contact_us_message') }}</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg">
                                    <tr>
                                        <th>{{ ___('label.id') }}</th>
                                        <th>{{ ___('label.name') }}</th>
                                        <th>{{ ___('label.email') }}</th>
                                        <th>{{ ___('label.message') }}</th>
                                        <th>{{ ___('label.date') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($feedbacks as $key => $feedback)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{$feedback->name}}</td>
                                        <td>{{$feedback->email}}</td>
                                        <td>{{$feedback->message}}</td>
                                        <td>{{$feedback->created_at }}</td>
                                    </tr>
                                    @empty
                                    <x-nodata-found :colspan="5" />
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- pagination component -->
                        @if(count($feedbacks))
                        <x-paginate-show :items="$feedbacks" />
                        @endif
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
