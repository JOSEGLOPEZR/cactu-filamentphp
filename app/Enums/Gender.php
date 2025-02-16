<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum Gender: int implements HasColor, HasLabel
{
    use BaseEnum;

    case Male = 1;
    case Female = 2;

    public function getLabel(): ?string
    {
        return __($this->name);
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Male => 'blue',
            self::Female => 'pink',
        };
    }
}
