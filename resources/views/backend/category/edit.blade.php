@extends('backend.partials.master')
@section('title')
{{ ___('menus.category') }} {{ ___('label.add') }}
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
                            <li class="breadcrumb-item"><a href="{{route('category.index')}}" class="breadcrumb-link active">{{ ___('label.category_list') }}</a></li>
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
                        <h4 class="title-site">{{ ___('label.add') }} {{ ___('menus.category') }} </h4>
                    </div>
                    <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.title') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.title') }}" class="form-control input-style-1" name="title" value="{{ old('title', $category->title) }}">
                                @error('title')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                             <div class="form-group col-md-6 ">
                                <label>{{ ___('label.sub_title') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('placeholder.sub_title') }}" class="form-control input-style-1" name="sub_title" value="{{ old('sub_title', $category->sub_title) }}">
                                @error('sub_title')
                                <p class="pt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="label-style-1">{{ ___('label.icon') }}<span class="fillable"></span></label>
                                <div class="ot_fileUploader left-side mb-3">
                                    <img src="{{ getImage(null) }}">
                                    <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
                                    <button class="primary-btn-small-input" type="button">
                                        <label class="j-td-btn" for="icon">{{ ___('label.browse') }}</label>
                                        <input type="file" class="d-none form-control" name="icon" id="icon" accept="image/jpeg, image/jpg, image/png, image/webp">
                                    </button>
                                </div>
                                @error('profile_photo')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>




                            <div class="form-group col-md-6 ">
                                <label>{{ ___('label.position') }}<span class="text-danger">*</span></label>
                                <input type="number" class="form-control input-style-1 " name="position" placeholder="{{ ___('placeholder.position') }}" value="{{ old('position', $category->position) }}">
                                @error('position') <p class="pt-2 text-danger">{{ $message }}</p> @enderror
                            </div>

                              <div class="col-md-6">
                                  <label for="">{{ ___('label.status') }}</label>
                                  @php
                                      use App\Enums\Status;
                                  @endphp
                                  <select name="status" class="form-control input-style-1 select2">

                                      @foreach (Status::cases() as $type)
                                          <option value="{{ $type->value }}"  @selected(old('status', $category->status) == $type->value)>
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
                                    <a href="{{ route('category.index') }}" class="j-td-btn btn-red"> <span>{{ ___('label.cancel') }}</span> </a>
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
