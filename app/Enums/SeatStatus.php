<?php

namespace App\Enums;

enum SeatStatus: string
{
    use Traits\EnumMatching;

    case AVAILABLE  = 'available';
    case HOLD       = 'hold';
    case SOLD       = 'sold';
}
