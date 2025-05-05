<div class="input-group mb-3">
    <div class="form-floating">
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $label }}">
        <label for="{{ $name }}">{{ $label }}</label>
    </div>
    <span class="input-group-text">{{ $text }}</span>
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
