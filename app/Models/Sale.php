<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

use App\Models\Property;
use App\Models\User;
use App\Models\Image;
use App\Models\Address;


class Sale extends Model
{
    use HasFactory;
    protected $table='sales';
    /**
     * Get the property that owns the Rent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the images for the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function images(): HasOneThrough
    {
        return $this->hasOneThrough(Image::class, Property::class);
    }
    public function address(): HasOneThrough
    {
        return $this->hasOneThrough(Address::class, Property::class,'sale_id', 'property_id','id','id');
    }
    public function user(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Property::class, );
    }
}
