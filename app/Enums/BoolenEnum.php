<?php

namespace App\Enums;

enum BoolenEnum: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Tak',
            self::INACTIVE => 'Nie',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}


// @foreach(App\Enums\YesNoEnum::options() as $value)
//     <label>
//         <input type="radio" name="active" value="{{ $value }}" {{ old('active') == $value ? 'checked' : '' }}>
//         {{ App\Enums\YesNoEnum::from($value)->label() }}  <!-- Wyświetlanie etykiety "Tak" lub "Nie" -->
//     </label>
// @endforeach


//   @foreach(BoolenEnum::options() as $value)
//      <option value="{{ $value }}" {{ old('active') == $value ? 'selected' : '' }}>
//           {{ BoolenEnum::from($value)->label() }}
//      </option>
//   @endforeach