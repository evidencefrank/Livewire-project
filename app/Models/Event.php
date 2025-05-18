<?php

namespace App\Models;

use App\Enums\Currency;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'rows',
        'columns',
        'price_cents',
        'price_currency',
    ];

    protected function casts(): array
    {
        return [
            'start_at'    => 'datetime',
            'end_at'      => 'datetime',
            'price_cents' => 'integer',
            'rows'        => 'integer',
            'columns'     => 'integer',
            'price_currency' =>  Currency::class
        ];
    }

    /**
     * The seats that belong to the event.
     */
    public function seats(): HasMany
    {
        return $this->hasMany(Seat::class);
    }

    /**
     * The purchases that belong to the event.
     */
    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }
}
