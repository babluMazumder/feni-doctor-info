@extends('backend.partials.master')
@section('title')
    {{ ___('label.blood_bank') }} {{ ___('label.list') }}
@endsection
@section('maincontent')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">{{ ___('label.dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href=""
                                        class="breadcrumb-link active">{{ ___('label.blood_bank_list') }}</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="j-parcel-main j-parcel-res">
                    <div class="card">
                        <div class="card-header mb-3">
                            <h4 class="title-site">{{ ___('label.blood_bank_list') }} </h4>
                            @if (hasPermission('bloodbank_create'))
                                <a href="{{ route('bloodbank.create') }}" class="j-td-btn"> <img
                                        src="{{ asset('backend') }}/icons/icon//plus-white.png" class="jj"
                                        alt="no image"> <span>{{ ___('menus.add') }}</span> </a>
                            @endif
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-sm">
                                    <thead class="bg">
                                        <tr>
                                            <th>{{ ___('label.id') }}</th>
                                            <th>{{ ___('label.name') }}</th>
                                            <th>{{ ___('label.license_no') }}</th>
                                            <th>{{ ___('label.email') }}</th>
                                            <th>{{ ___('label.phone') }}</th>
                                            <th>{{ ___('label.address') }}</th>
                                            <th>{{ ___('label.district') }}</th>

                                            <th>{{ ___('label.latitude') }}</th>
                                            <th>{{ ___('label.longitude') }}</th>
                                            <th>{{ ___('label.available_groups') }}</th>
                                            <th>{{ ___('label.status') }}</th>
                                            <th>{{ ___('label.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse($bloodBank as $key => $row)
                                            <tr id="row_{{ $row->id }}">
                                                <td>{{ ++$key }}</td>
                                                <td> {{ $row->name }}</td>
                                                <td> {{ $row->license_no }}</td>
                                                <td> {{ $row->email }}</td>
                                                <td> {{ $row->phone }}</td>
                                                <td> {{ $row->address }}</td>
                                                <td> {{ $row->district }}</td>
                                                <td> {{ $row->latitude }}</td>
                                                <td> {{ $row->longitude }}</td>
                                                <td>
                                                    @php
                                                        $groups = is_string($row->available_groups)
                                                            ? json_decode($row->available_groups, true)
                                                            : $row->available_groups;
                                                    @endphp
                                                    @if (!empty($groups))
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($groups as $group => $units)
                                                                <li>{{ $group }}: {{ $units }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <span>-</span>
                                                    @endif
                                                </td>

                                                <td> {{ $row->status }} </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend be-addon">

                                                            <div class="d-flex" data-toggle="dropdown">
                                                                <a class="p-2" href="javascript:void()"> <i
                                                                        class="fa fa-ellipsis-v"></i> </a>
                                                            </div>

                                                            <div class="dropdown-menu">

                                                                @if (hasPermission('bloodbank_update'))
                                                                    <a href="{{ route('bloodbank.edit', $row->id) }}"
                                                                        class="dropdown-item"><i class="fa fa-edit"
                                                                            aria-hidden="true"></i>
                                                                        {{ ___('label.edit') }}</a>
                                                                @endif

                                                                @if (hasPermission('bloodbank_delete'))
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('bloodbank.delete', $row->id) }}"
                                                                        onclick="tryDelete(event)"
                                                                        data-remove-id="row_{{ $row->id }}"
                                                                        data-title="{{ ___('label.delete') }}"
                                                                        data-text="{{ ___('alert.this_action_cannot_be_reversed') }}"
                                                                        data-confirm-button-text="{{ ___('label.delete') }}"
                                                                        data-cancel-button-text="{{ ___('label.cancel') }}">
                                                                        <i class="fa fa-trash"></i>
                                                                        {{ ___('label.delete') }} </a>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <x-nodata-found :colspan="12" />
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            @if ($bloodBank)
                                <div class="mt-3">
                                    <x-paginate-show :items="$bloodBank" />
                                </div>
                            @endif
                            <!-- pagination component -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection()

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#todo_btn').click(function() {
                var id = $(this).data('id');
                $(".modal_todo_id").attr("value", id);
            });
        });
    </script>

    <script src="{{ asset('backend/js/custom/delete_ajax.js') }}"></script>
@endpush
