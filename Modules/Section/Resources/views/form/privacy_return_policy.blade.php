<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.privacy_return_policy_title') }} </label>
    <input type="text" class="form-control input-style-1" name="privacy_return_policy_title" value="{{ @$section['privacy_return_policy_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="privacy_return_policy_title">
</div>



<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.description') }} </label>
    <input type="text" class="form-control input-style-1" name="privacy_return_policy_description" value="{{ @$section['privacy_return_policy_description'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="privacy_return_policy_description">
</div>
