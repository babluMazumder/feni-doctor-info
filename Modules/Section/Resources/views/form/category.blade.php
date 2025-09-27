<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.category_title') }} </label>
    <input type="text" class="form-control input-style-1" name="category_title" value="{{ @$section['category_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="category_title">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.category_sub_title') }} </label>
    <input type="text" class="form-control input-style-1" name="category_sub_title" value="{{ @$section['category_sub_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="category_sub_title">
</div>
