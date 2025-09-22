@extends('backend.partials.master')
@section('title')
{{ ___('blog') }} {{ ___('edit') }}
@endsection

@section('maincontent')
<div class="container-fluid  dashboard-content">
    <!-- pageheader -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">{{ ___('label.dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">{{ ___('dashboard.website_Setup') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}" class="breadcrumb-link">{{ ___('label.blogs') }}</a></li>
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link active">{{ ___('label.edit') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end pageheader -->

    <div class="j-create-main">
        <form action="{{ route('blog.update', [$blog->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12">
                    <div class="form-inputs">

                        <div class="form-input-header">
                            <h4 class="title-site"> {{ ___('label.edit') }} {{ ___('label.blog') }}</h4>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label class="label-style-1">{{ ___('label.author') }} <span class="text-danger">*</span></label>
                                <select id="author" name="author" class="form-control input-style-1 select2">
                                    <option selected disabled>{{ ___('label.select') }} {{ ___('label.author') }} </option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" @selected(old('author', $blog->author) == $user->id)>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('author')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="label-style-1">{{ ___('label.title') }} <span class="text-danger">*</span></label>
                                <input type="text" placeholder="{{ ___('label.enter_title') }}" class="form-control input-style-1" name="title" value="{{ old('title', $blog->title) }}">
                                @error('title')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="label-style-1">{{ ___('label.date') }}<span class="text-danger">*</span></label>
                                <input type="date" class="form-control input-style-1 flatpickr" name="date" value="{{ old('date', $blog->date, Date('d/m/Y')) }}">
                                @error('date')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="label-style-1">{{ ___('label.position') }}</label>
                                <input type="number" placeholder="{{ ___('placeholder.position') }}" class="form-control input-style-1" name="position" value="{{ old('position', $blog->position) }}">
                                @error('position')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="label-style-1">{{ ___('label.status') }} <span class="text-danger">*</span></label>
                                <select name="status" class="form-control input-style-1 select2">
                                    @foreach (config('site.status.default') as $key => $status)
                                    <option value="{{ $key }}" @selected(old('status', $blog->status) == $key)>{{ ___('common.'.  $status) }}</option>
                                    @endforeach
                                </select>
                                @error('status') <small class="text-danger mt-2">{{ $message }}</small> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="label-style-1">{{ ___('label.banner') }}<span class="fillable"></span></label>
                                <div class="ot_fileUploader left-side mb-3">
                                    <img src="{{ getImage($blog->upload, 'original','default-image-40x40.png') }}">
                                    <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
                                    <button class="primary-btn-small-input" type="button">
                                        <label class="j-td-btn" for="banner">{{ ___('label.browse') }}</label>
                                        <input type="file" class="d-none form-control" name="banner" id="banner" accept="image/jpeg, image/jpg, image/png, image/webp">
                                    </button>
                                </div>
                                @error('banner')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-12">
                                <label class=" label-style-1" for="summernote">{{ ___('label.description') }}</label>
                                <textarea class="form-control input-style-1 summernote" name="description" id="summernote" rows="8" placeholder="{{ ___('placeholder.blog_description') }}">{{ $blog->description }}</textarea>
                                @error('description')
                                <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="j-create-btns ml-1">
                    <div class="drp-btns">
                        <button type="submit" class="j-td-btn"><i class="fa-solid fa-floppy-disk"></i><span>{{ ___('label.update') }}</span></button>
                        <a href="{{ route('blog.index') }}" class="j-td-btn btn-red">
                            <i class="fa-solid fa-rectangle-xmark"></i><span>{{ ___('label.cancel') }}</span>
                        </a>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
