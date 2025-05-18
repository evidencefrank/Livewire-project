<?php

namespace App\Models;

use Database\Factories\SeatFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seat extends Model
{
    /** @use HasFactory<SeatFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'event_id',
        'row_number',
        'column_number',
        'label',
        'version',
    ];

    protected function casts(): array
    {
        return [
            'row_number'    => 'integer',
            'column_number' => 'integer',
            'version'       => 'integer',
        ];
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
