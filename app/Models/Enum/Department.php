<?php

namespace App\Models\Enum;

use Filament\Support\Contracts\HasLabel;

enum Department: string implements HasLabel
{

    case sell = 'فروش';
    case support = 'پشتیبانی';


    public function getLabel(): ?string
    {

        // return $this->sell;
        // return $this->support;

        return match ($this) {
            self::sell => 'فروش',
            self::support => 'پشتیبانی',
        };
    }
}
