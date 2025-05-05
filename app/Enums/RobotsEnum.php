<?php

namespace App\Enums;

enum RobotsEnum: string
{
    case INDEX = 'index';
    case NOINDEX = 'noindex';
    case FOLLOW = 'follow';
    case NOFOLLOW = 'nofollow';
    case NOARCHIVE = 'noarchive';
    case NOSNIPPET = 'nosnippet';
    case NOINDEX_NOFOLLOW = 'noindex, nofollow';
    case INDEX_NOFOLLOW = 'index, nofollow';
    case NOINDEX_FOLLOW = 'noindex, follow';
    case ALL = 'all';

    public function label(): string
    {
        return match ($this) {
            self::INDEX => 'Index (zalecane)',
            self::NOINDEX => 'No Index',
            self::FOLLOW => 'Follow',
            self::NOFOLLOW => 'No Follow',
            self::NOARCHIVE => 'No Archive',
            self::NOSNIPPET => 'No Snippet',
            self::NOINDEX_NOFOLLOW => 'No Index, No Follow',
            self::INDEX_NOFOLLOW => 'Index, No Follow',
            self::NOINDEX_FOLLOW => 'No Index, Follow',
            self::ALL => 'All',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}


// <select name="robots" id="robots">
//     @foreach(App\Enums\RobotsEnum::options() as $value)
//         <option value="{{ $value }}" {{ old('robots') == $value ? 'selected' : '' }}>
//             {{ App\Enums\RobotsEnum::from($value)->label() }}
//         </option>
//     @endforeach
// </select>
