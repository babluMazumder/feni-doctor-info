
<div class="form-group col-lg-6">
    <label class=" label-style-1" for="title">{{ ___('label.title') }}</label>
    <textarea class="form-control input-style-1 summernote-2" name="title" id="title" placeholder="{{ ___("placeholder.enter_title")}}">{{ @$section['title'] }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="title">
</div>


<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.address') }} </label>
    <input type="text" class="form-control input-style-1" name="address" value="{{ @$section['address'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="address">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.phone') }} </label>
    <input type="text" class="form-control input-style-1" name="phone" value="{{ @$section['phone'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="phone">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.email') }} </label>
    <input type="email" class="form-control input-style-1" name="email" value="{{ @$section['email'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="email">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.opening_days') }} </label>
    <input type="text" class="form-control input-style-1" name="opening_days" value="{{ @$section['opening_days'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="opening_days">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.opening_hours') }} </label>
    <input type="text" class="form-control input-style-1" name="opening_hours" value="{{ @$section['opening_hours'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="opening_hours">
</div>




<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.website') }} </label>
    <input type="text" class="form-control input-style-1" name="website" value="{{ @$section['website'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="website">
</div>

<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.map') }} </label>
    <input type="text" class="form-control input-style-1" name="map" value="{{ @$section['map'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="map">
</div>
