<div class="form-group col-lg-6">
    <label class=" label-style-1" for="title">{{ ___('label.client_title') }}</label>
    <textarea class="form-control input-style-1 summernote-2" name="client_title" id="client_title" placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['client_title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="client_title">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.client_sub_title') }} </label>
    <textarea class="form-control input-style-1" name="client_sub_title" rows="6">{{ @$section['client_sub_title'] }}</textarea>
    {{-- <input type="text" class="form-control input-style-1" name="description" value="{{ @$section['description'] }}" required> --}}
    <input type="hidden" class="form-control input-style-1" name="name[]" value="client_sub_title">
</div>
