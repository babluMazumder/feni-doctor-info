<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.terms_conditions_title') }} </label>
    <input type="text" class="form-control input-style-1" name="terms_conditions_title" value="{{ @$section['terms_conditions_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="terms_conditions_title">
</div>





<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.description') }} </label>
    <input type="text" class="form-control input-style-1" name="description" value="{{ @$section['description'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="description">
</div>
