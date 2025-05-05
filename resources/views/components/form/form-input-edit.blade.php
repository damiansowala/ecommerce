<div class="form-floating mb-3">
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $label }}" value="{{ $value }}">

    <label for="{{ $name }}">{{ $label }}</label>
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
