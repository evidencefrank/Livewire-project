<?php

namespace App\Enums;

enum PurchaseStatus: string
{
    use Traits\EnumMatching;

    case CONFIRMED  = 'confirmed';
    case CANCELLED  = 'cancelled';
    case FAILED     = 'failed';
    case PENDING    = 'pending';

}
