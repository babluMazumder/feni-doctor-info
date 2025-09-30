@extends('backend.partials.master')
@section('title')
{{ ___('menus.doctor') }} {{ ___('label.add') }}
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
                            <li class="breadcrumb-item"><a href="{{route('doctor.index')}}" class="breadcrumb-link active">{{ ___('label.doctor_list') }}</a></li>
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
                        <h4 class="title-site">{{ ___('label.add') }} {{ ___('menus.doctor') }} </h4>
                    </div>
                    <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.title') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.name') }}" class="form-control input-style-1" name="name" value="{{ old('name') }}">
                                @error('name')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.specialization') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.specialization') }}" class="form-control input-style-1" name="specialization" value="{{ old('specialization') }}">
                                @error('specialization')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ ___('label.qualification') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.qualification') }}" class="form-control input-style-1" name="qualification" value="{{ old('qualification') }}">
                                @error('qualification')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.designation') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.designation') }}" class="form-control input-style-1" name="designation" value="{{ old('designation') }}">
                                @error('designation')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.hospital_name') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.hospital_name') }}" class="form-control input-style-1" name="hospital_name" value="{{ old('hospital_name') }}">
                                @error('hospital_name')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.visiting_hours') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.visiting_hours') }}" class="form-control input-style-1" name="visiting_hours" value="{{ old('visiting_hours') }}">
                                @error('visiting_hours')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                  <label for="">{{ ___('label.days_select') }}</label>
                                  @php
                                      use App\Enums\WeekDay;
                                  @endphp
                                  <select name="days_select[]" class="form-control input-style-1 select2" multiple>

                                      @foreach (WeekDay::cases() as $type)
                                          <option value="{{ $type->value }}"  {{ collect(old('days_select'))->contains($type->value) ? 'selected' : '' }}>
                                              {{ $type->value }}
                                          </option>
                                      @endforeach
                                  </select>
                              </div>



                            <div class="form-group col-md-6">
                                <label>{{ ___('label.room_no') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.room_no') }}" class="form-control input-style-1" name="room_no" value="{{ old('room_no') }}">
                                @error('room_no')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.visiting_fee') }}</label>
                                <input type="number" step="0.01" placeholder="{{ ___('placeholder.visiting_fee') }}" class="form-control input-style-1" name="visiting_fee" value="{{ old('visiting_fee') }}">
                                @error('visiting_fee')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.contact_number') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.contact_number') }}" class="form-control input-style-1" name="contact_number" value="{{ old('contact_number') }}">
                                @error('contact_number')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="label-style-1">{{ ___('label.profile_photo') }}<span class="fillable"></span></label>
                                <div class="ot_fileUploader left-side mb-3">
                                    <img src="{{ getImage(null) }}">
                                    <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
                                    <button class="primary-btn-small-input" type="button">
                                        <label class="j-td-btn" for="profile_photo">{{ ___('label.browse') }}</label>
                                        <input type="file" class="d-none form-control" name="profile_photo" id="profile_photo" accept="image/jpeg, image/jpg, image/png, image/webp">
                                    </button>
                                </div>
                                @error('profile_photo')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>{{ ___('label.category') }}</label>
                                <select name="category_id" class="form-control input-style-1">
                                    <option value="">{{ ___('placeholder.select_category') }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ ___('label.slug') }}</label>
                                <input type="text" placeholder="{{ ___('placeholder.slug') }}" class="form-control input-style-1" name="slug" value="{{ old('slug') }}">
                                @error('slug')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
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
