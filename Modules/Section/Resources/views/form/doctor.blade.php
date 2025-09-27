<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.doctor_title') }} </label>
    <input type="text" class="form-control input-style-1" name="doctor_title" value="{{ @$section['doctor_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="doctor_title">
</div>
<div class="form-group col-lg-6 ">
    <label class="label-style-1">{{ ___('label.doctor_sub_title') }} </label>
    <input type="text" class="form-control input-style-1" name="doctor_sub_title" value="{{ @$section['doctor_sub_title'] }}" required>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="doctor_sub_title">
</div>
