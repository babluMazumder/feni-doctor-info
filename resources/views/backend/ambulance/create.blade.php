@extends('backend.partials.master')
@section('title')
{{ ___('menus.ambulance') }} {{ ___('label.add') }}
@endsection
@section('maincontent')
<div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="breadcrumb-link">{{ ___('label.dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('ambulance.index')}}" class="breadcrumb-link active">{{ ___('label.ambulance_list') }}</a></li>
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link active">{{ ___('label.add') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="form-input-header">
                        <h4 class="title-site">{{ ___('label.add') }} {{ ___('menus.ambulance') }} </h4>
                    </div>
                    <form action="{{ route('ambulance.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.service_name') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.service_name') }}" class="form-control input-style-1" name="service_name" value="{{ old('service_name') }}">
                                @error('service_name')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                             <div class="col-md-6">
                                  <label for="">{{ ___('label.ambulance_type') }}</label>
                                  @php
                                      use App\Enums\AmbulanceType;
                                  @endphp
                                  <select name="ambulance_type" class="form-control input-style-1 select2">
                                    <option value=""></option>
                                      @foreach (AmbulanceType::cases() as $type)
                                          <option value="{{ $type->value }}" >
                                              {{ $type->label() }}
                                          </option>
                                      @endforeach
                                  </select>
                              </div>



                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.registration_no') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-style-1 " name="registration_no" placeholder="{{ ___('placeholder.registration_no') }}" value="{{ old('registration_no') }}">
                                @error('registration_no') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.driver_name') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-style-1 " name="driver_name" placeholder="{{ ___('placeholder.driver_name') }}" value="{{ old('driver_name') }}">
                                @error('driver_name') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.driver_phone') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-style-1 " name="driver_phone" placeholder="{{ ___('placeholder.driver_phone') }}" value="{{ old('driver_phone') }}">
                                @error('driver_phone') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.email') }}</label>
                                <input type="email" class="form-control input-style-1 " name="email" placeholder="{{ ___('placeholder.email') }}" value="{{ old('email') }}">
                                @error('email') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.phone') }}</label>
                                <input type="text" class="form-control input-style-1 " name="phone" placeholder="{{ ___('placeholder.phone') }}" value="{{ old('phone') }}">
                                @error('phone') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.address') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-style-1 " name="address" placeholder="{{ ___('placeholder.address') }}" value="{{ old('address') }}">
                                @error('address') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.district') }}<span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-style-1 " name="district" placeholder="{{ ___('placeholder.district') }}" value="{{ old('district') }}">
                                @error('district') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.latitude') }}</label>
                                <input type="number" class="form-control input-style-1 " name="latitude" placeholder="{{ ___('placeholder.latitude') }}" value="{{ old('latitude') }}">
                                @error('latitude') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.longitude') }}</label>
                                <input type="number" class="form-control input-style-1 " name="longitude" placeholder="{{ ___('placeholder.longitude') }}" value="{{ old('longitude') }}">
                                @error('longitude') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                              <div class="col-md-6">
                                  <label for="">{{ ___('label.status') }}</label>
                                  @php
                                      use App\Enums\Status;
                                  @endphp
                                  <select name="status" class="form-control input-style-1 select2">

                                      @foreach (Status::cases() as $type)
                                          <option value="{{ $type->value }}" >
                                              {{ $type->name }}
                                          </option>
                                      @endforeach
                                  </select>
                              </div>

                        </div>
                        <div class="form-row">
                            <div class="j-create-btns">
                                <div class="drp-btns">
                                    <button type="submit" class="j-td-btn">{{ ___('label.save_change') }}</button>
                                    <a href="{{ route('ambulance.index') }}" class="j-td-btn btn-red"> <span>{{ ___('label.cancel') }}</span> </a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
