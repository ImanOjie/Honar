<?php

namespace App\Filament\User\Resources\TicketResource\Pages;

use App\Filament\User\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicket extends CreateRecord
{
    protected static string $resource = TicketResource::class;
}
