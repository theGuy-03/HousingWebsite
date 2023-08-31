<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\Rent;
use App\Models\Sale;
use App\Models\Address;
use App\Models\Mortgage;
use App\Models\Image;
use App\Models\Approve;

class Property extends Model
{
    use HasFactory;

    protected $table='properties';

    /**
     * Get the user associated with the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);

    }

    public function rent(): HasOne
    {
        return $this->hasOne(Rent::class);
    }
    public function sale(): HasOne
    {
        return $this->hasOne(Sale::class);
    }
    public function mortgage(): HasOne
    {
        return $this->hasOne(Mortgage::class);
    }

    /**
     * Get all of the comments for the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): hasOne
    {

        return $this->hasOne(Image::class);
    }
    /**
     * Get the user that owns the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the profile for the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function profile(): HasOneThrough
    {
        return $this->hasOneThrough(Profile::class, User::class);
    }
    /**
     * Get all of the approve for the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approves(): HasMany
    {
        return $this->hasMany(Approve::class);
    }


}
