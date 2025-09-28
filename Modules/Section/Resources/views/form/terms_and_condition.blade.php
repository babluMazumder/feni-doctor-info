

<div class="col-lg-12 mb-3">
    <label class="form-label">{{ ___('label.terms_conditions_title') }} </label>
    <input type="text" placeholder="{{ ___('placeholder.enter_title') }}" class="form-control input-style-1" name="terms_conditions_title" value="{{ old('terms_conditions_title', @$section['terms_conditions_title']) }}">
    <input type="hidden" class="form-control input-style-1" name="name[]" value="title">
    @error('title') <p class="text-danger">{{ $message }}</p> @enderror
</div>

<div class="col-lg-12 mb-3">
    <label class="form-label">{{ ___('label.description') }} </label>
    <textarea name="description" class="form-control input-style-1 summernote" rows="10">{{ old('description', @$section['description']) }}</textarea>
    <input type="hidden" class="form-control input-style-1" name="name[]" value="description">
    @error('description') <p class="text-danger">{{ $message }}</p> @enderror
</div>
