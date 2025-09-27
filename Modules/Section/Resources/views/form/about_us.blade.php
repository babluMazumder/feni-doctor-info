
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.small_heading') }} </label>
    <input type="text" class="form-control input-style-1" name="section_tagline" value="{{ @$section['section_tagline'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="section_tagline">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.main_heading') }} </label>
    <input type="text" class="form-control input-style-1" name="section_main_title" value="{{ @$section['section_main_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="section_main_title">
</div>


<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.positive_reviews') }} </label>
    <input type="text" class="form-control input-style-1" name="positive_reviews" value="{{ @$section['positive_reviews'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="positive_reviews">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.happay_customers') }} </label>
    <input type="text" class="form-control input-style-1" name="happay_customers" value="{{ @$section['happay_customers'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="happay_customers">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.years_of_experience') }} </label>
    <input type="text" class="form-control input-style-1" name="years_of_experience" value="{{ @$section['years_of_experience'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="years_of_experience">
</div>



<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.promotional_red_text') }} </label>
    <input type="text" class="form-control input-style-1" name="promotional_red_text" value="{{ @$section['promotional_red_text'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="promotional_red_text">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.primary_button_text') }} </label>
    <input type="text" class="form-control input-style-1" name="primary_button_text" value="{{ @$section['primary_button_text'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="primary_button_text">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.primary_button_link') }} </label>
    <input type="url" class="form-control input-style-1" name="primary_button_link" value="{{ @$section['primary_button_link'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="primary_button_link">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.video_url') }} </label>
    <input type="url" class="form-control input-style-1" name="video_url" value="{{ @$section['video_url'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="video_url">
</div>




<div class="col-md-6">
    <label class="label-style-1">{{ ___('label.video_image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">

        @php
        $upload = App\Models\Upload::find($section['video_image']);
        @endphp

        <img src="{{ getImage($upload,'original') }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="video_image">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="video_image" value="video_image" id="video_image" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div>
<div class="col-md-6">
    <label class="label-style-1">{{ ___('label.about_us_image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">

        @php
        $upload = App\Models\Upload::find($section['about_us_image']);
        @endphp

        <img src="{{ getImage($upload,'original') }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="about_us_image">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="about_us_image" value="about_us_image" id="about_us_image" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.description') }} </label>
    {{-- <input type="text" class="form-control input-style-1 summernote" id="summernote" name="section_description" value="{{ @$section['section_description'] }}" required> --}}
    <textarea class="form-control input-style-1 summernote" id="summernote" name="section_description" rows="6">{!! @$section['section_description'] !!}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="section_description">
</div>
