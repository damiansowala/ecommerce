<div class="form-check form-switch mb-3">
    <input class="form-check-input @error($name) is-invalid @enderror" type="checkbox" role="switch" id="{{ $name }}">
    <label class="form-check-label" name="{{ $name }}" for="{{ $name }}">{{ $label }}</label>
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
