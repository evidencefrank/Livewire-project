<?php

namespace App\Enums\Traits;

trait EnumMatching
{

    /**
     * Returns an array of enum values.
     *
     * @return array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
