<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Property;
use App\Models\Address;
use App\Models\Sale;
use App\Models\Rent;
use App\Models\Mortgage;

class Image extends Model
{
    use HasFactory;
    protected $table='images';
    protected $cast=['path'=> 'array'];
    /**
     * Get the property that owns the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the comments for the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function address(): HasManyThrough
    {
        return $this->hasManyThrough(Address::class, Property::class);
    }
}
