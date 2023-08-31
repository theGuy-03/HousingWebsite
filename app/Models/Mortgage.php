<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Property;

class Mortgage extends Model
{
    use HasFactory;
    protected $table='mortgages';
    /**
     * Get the property that owns the Rent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'foreign_key', 'other_key');
    }
}
