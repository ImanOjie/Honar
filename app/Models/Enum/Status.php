<?php

namespace App\Models\Enum;

use Filament\Support\Contracts\HasLabel;

enum Status: string implements HasLabel
{
    case open = 'باز';
    case close = 'بسته';
    case WaitingResponse = 'منتظر پاسخ';


    public function getLabel(): ?string
    {

        return match ($this) {
            self::open => 'باز',
            self::close => 'بسته',
            self::WaitingResponse => 'منتظر پاسخ',
        };
    }
}
