<div class="form-group col-lg-6">
    <label class=" label-style-1" for="hero_section_title">{{ ___('label.title') }}</label>
    <textarea class="form-control input-style-1 summernote" name="hero_section_title" id="hero_section_title" placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['hero_section_title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="hero_section_title">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1" for="hero_section_short_description">{{ ___('label.slogan') }} </label>
    <textarea class="form-control input-style-1" name="hero_section_short_description" id="hero_section_short_description" rows="4" placeholder="{{ ___("placeholder.slogan")}}">{{ @$section['hero_section_short_description'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="hero_section_short_description">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.description') }} </label>
     <textarea class="form-control input-style-1 summernote" name="description" id="description" placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['description'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="description">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.appointment_button') }} </label>
    <input type="text" class="form-control input-style-1" name="appointment_button" value="{{ @$section['appointment_button'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="appointment_button">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.appointment_button_link') }} </label>
    <input type="url" class="form-control input-style-1" name="appointment_button_link" value="{{ @$section['appointment_button_link'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="appointment_button_link">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.discover_button') }} </label>
    <input type="text" class="form-control input-style-1" name="discover_button" value="{{ @$section['discover_button'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="discover_button">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.discover_button_link') }} </label>
    <input type="url" class="form-control input-style-1" name="discover_button_link" value="{{ @$section['discover_button_link'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="discover_button_link">


<div class="col-md-6">
    <label class="label-style-1">{{ ___('label.hero_image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">

        @php
        $upload = App\Models\Upload::find($section['hero_image']);
        @endphp

        <img src="{{ getImage($upload,'original') }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="fileBrouse">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="hero_image" value="hero_image" id="fileBrouse" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div>


{{-- <div class="col-md-6">
    <label class="label-style-1">{{ ___('label.client_image_one') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">

        @php
        $client_image_one = App\Models\Backend\Upload::find($section['client_image_one']);
        @endphp

        <img src="{{ getImage($client_image_one,'original') }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="client_image_one">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="client_image_one" value="client_image_one" id="client_image_one" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div> --}}


