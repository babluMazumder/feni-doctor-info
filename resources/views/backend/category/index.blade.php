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
                            @if (hasPermission('category_create'))
                                <a href="{{ route('category.create') }}" class="j-td-btn"> <img
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
                                            <th>{{ ___('label.title') }}</th>
                                            <th>{{ ___('label.position') }}</th>

                                            <th>{{ ___('label.status') }}</th>
                                            <th>{{ ___('label.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse($category as $key => $row)
                                            <tr id="row_{{ $row->id }}">
                                                <td>{{ ++$key }}</td>
                                                <td> {{ $row->title }}</td>
                                                <td> {{ $row->position }}</td>



                                                <td>

                                                      @if($row->status == 1)
                                                    <span class="class='bullet-badge  bullet-badge-success">
                                                        Active
                                                    </span>
                                                @else
                                                    <span class="class='bullet-badge  bullet-badge-danger">Inactive</span>
                                                @endif

                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend be-addon">

                                                            <div class="d-flex" data-toggle="dropdown">
                                                                <a class="p-2" href="javascript:void()"> <i
                                                                        class="fa fa-ellipsis-v"></i> </a>
                                                            </div>

                                                            <div class="dropdown-menu">

                                                                @if (hasPermission('category_update'))
                                                                    <a href="{{ route('category.edit', $row->id) }}"
                                                                        class="dropdown-item"><i class="fa fa-edit"
                                                                            aria-hidden="true"></i>
                                                                        {{ ___('label.edit') }}</a>
                                                                @endif

                                                                @if (hasPermission('category_delete'))
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('category.delete', $row->id) }}"
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
                                @if ($category)
                                    <div class="mt-3">
                                        <x-paginate-show :items="$category" />
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
