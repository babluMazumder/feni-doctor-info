
<div class="form-group col-lg-6">
    <label class=" label-style-1" for="hero_section_title">{{ ___('label.title') }}</label>
    <textarea class="form-control input-style-1 summernote-2" name="title"  placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="title">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.short_title') }} </label>
    <input type="text" class="form-control input-style-1" name="short_title" value="{{ @$section['short_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="short_title">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.button_one') }} </label>
    <input type="text" class="form-control input-style-1" name="button_one" value="{{ @$section['button_one'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="button_one">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.button_one_link') }} </label>
    <input type="url" class="form-control input-style-1" name="button_one_link" value="{{ @$section['button_one_link'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="button_one_link">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.button_two') }} </label>
    <input type="text" class="form-control input-style-1" name="button_two" value="{{ @$section['button_two'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="button_two">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.button_two_link') }} </label>
    <input type="url" class="form-control input-style-1" name="button_two_link" value="{{ @$section['button_two_link'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="button_two_link">
</div>

{{-- <div class="col-md-6">
    <label class="label-style-1">{{ ___('label.image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="fileBrouse">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="cta-bg-image" value="cta-bg-image" id="fileBrouse" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
    @error('cta-bg-image') <small class="text-danger mt-2">{{ $message }}</small> @enderror
    <input type="hidden" class="form-control input-style-1" name="name[]" value="cta-bg-image">
</div> --}}

<div class="col-md-6">
    <label class="label-style-1">{{ ___('label.cta_image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">

        @php
        $cta_image = App\Models\Upload::find($section['cta_image']);
        @endphp

        <img src="{{ getImage($cta_image,'original') }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="cta_image">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="cta_image" value="cta_image" id="cta_image" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div>
