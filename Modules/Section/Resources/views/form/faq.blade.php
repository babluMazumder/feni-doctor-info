<div class="form-group col-lg-6">
    <label class=" label-style-1" for="title">{{ ___('label.title') }}</label>
    <textarea class="form-control input-style-1 summernote-2" name="title" id="title" placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="title">
</div>
<div class="form-group col-lg-6">
    <label class=" label-style-1" for="title">{{ ___('label.short_title') }}</label>
    <textarea class="form-control input-style-1 summernote-2" name="short_title" id="short_title" placeholder="{{ ___("placeholder.short_title")}}">{{ @$section['short_title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="short_title">
</div>

<div class="col-md-6">
    <label class="label-style-1">{{ ___('label.faq_image') }} <span class="fillable"></span></label>

    <div class="ot_fileUploader left-side mb-3">


  @php $faq_image = customSection(\Modules\Section\Enums\Type::FAQ, 'faq_image'); @endphp
        <img src="{{ $faq_image['original'] }}" alt=" " class="rounded">
        <input class="form-control input-style-1 placeholder" type="text" placeholder="{{ ___('placeholder.attach_file') }}" readonly>
        <button class="primary-btn-small-input" type="button">
            <label class="j-td-btn" for="fileBrouse">{{ ___('label.browse') }}</label>
            <input type="file" class="d-none form-control" name="hero_image" value="hero_image" id="fileBrouse" accept="image/jpeg, image/jpg, image/png, image/webp">
        </button>
    </div>
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.description') }} </label>
 
    <textarea class="form-control input-style-1 summernote-2" name="description" id="description" placeholder="{{ ___("placeholder.description")}}">{{ @$section['description'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="description">
</div>

