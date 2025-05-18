<?php

namespace App\Enums;

use App\Enums\Traits\EnumMatching;

enum Currency: string
{
    use EnumMatching;

    case USD = 'usd';
    case ZAR = 'zar';

}
