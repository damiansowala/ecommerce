<div class="input-group mb-3">
    <div class="form-floating">
        <select name="{{ $name }}" id="{{ $name }}" class="form-select">
            @foreach($options as $value => $label)
            <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
        <label for="{{ $name }}" class="form-label">{{ $placeholder }}</label>

    </div>
    @if($tooltip)
    <span class="input-group-text">{!! $tooltip !!}</span>
    @endif
</div>
