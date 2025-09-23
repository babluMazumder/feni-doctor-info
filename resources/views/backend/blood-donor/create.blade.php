@extends('backend.partials.master')
@section('title')
{{ ___('menus.donor') }} {{ ___('label.add') }}
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
                            <li class="breadcrumb-item"><a href="{{route('blooddonor.index')}}" class="breadcrumb-link active">{{ ___('label.hospital_list') }}</a></li>
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
                        <h4 class="title-site">{{ ___('label.add') }} {{ ___('menus.donor') }} </h4>
                    </div>
                    <form action="{{ route('blooddonor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.name') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.Name') }}" class="form-control input-style-1" name="name" value="{{ old('name') }}">
                                @error('name')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.email') }}<span class="text-danger">*</span></label>
                                <input type="email" class="form-control input-style-1 " name="email" placeholder="{{ ___('placeholder.email') }}" value="{{ old('email') }}">
                                @error('email') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.phone') }}<span class="text-danger">*</span></label>
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
                                <label>{{ ___('label.last_donation_date') }}</label>
                                <input type="date" class="form-control input-style-1 " name="last_donation_date" placeholder="{{ ___('placeholder.last_donation_date') }}" value="{{ old('last_donation_date') }}">
                                @error('last_donation_date') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                    <label for="">{{ ___('label.Gender') }}<span class="text-danger">*</span></label>
                                    @php
                                        use App\Enums\Gender;
                                    @endphp
                                    <select name="gender" class="form-control input-style-1 select2">
                                        <option value=""></option>
                                        @foreach (Gender::cases() as $Gender)
                                            <option value="{{ $Gender->value }}" >
                                                {{ $Gender->name }}
                                            </option>
                                        @endforeach
                                    </select>
                           </div>
                            <div class="col-md-6">
                                    <label for="">{{ ___('label.BloodGroup') }}<span class="text-danger">*</span></label>
                                    @php
                                        use App\Enums\BloodGroup;
                                    @endphp
                                    <select name="blood_group" class="form-control input-style-1 select2">
                                        <option value=""></option>
                                        @foreach (BloodGroup::cases() as $BloodGroup)
                                            <option value="{{ $BloodGroup->value }}" >
                                                {{ $BloodGroup->label() }}
                                            </option>
                                        @endforeach
                                    </select>
                           </div>
                            <div class="col-md-6">
                                    <label for="">{{ ___('label.Availability') }}<span class="text-danger">*</span></label>
                                    @php
                                        use App\Enums\Availability;
                                    @endphp
                                    <select name="availability" class="form-control input-style-1 select2">
                                        <option value=""></option>
                                        @foreach (Availability::cases() as $Availability)
                                            <option value="{{ $Availability->value }}" >
                                                {{ $Availability->value }}
                                            </option>
                                        @endforeach
                                    </select>
                           </div>
                           

                              <div class="col-md-6">
                                    <label for="">{{ ___('label.status') }}</label>
                                    @php
                                        use App\Enums\Status;
                                    @endphp
                                    <select name="status" class="form-control input-style-1 select2">
                                        @foreach (Status::cases() as $status)
                                            <option value="{{ $status->value }}" >
                                                {{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>



                        </div>
                        <div class="form-row">
                            <div class="j-create-btns">
                                <div class="drp-btns">
                                    <button type="submit" class="j-td-btn">{{ ___('label.save_change') }}</button>
                                    <a href="{{ route('bloodbank.index') }}" class="j-td-btn btn-red"> <span>{{ ___('label.cancel') }}</span> </a>
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
