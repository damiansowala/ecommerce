<div class="form-floating mb-3">
    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $label }}" style="height: 300px"></textarea>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @error($name)
    <span class=" text-danger">{{ $message }}</span>
    @enderror

</div>
