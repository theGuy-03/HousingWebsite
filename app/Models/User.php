<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;
use App\Models\Property;
use App\Models\Image;
use App\Models\Rent;
use App\Models\Sale;
use App\Models\Mortgage;
use App\Models\Address;
use App\Models\About;
use App\Models\Footer;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'phone',
        'email',
        'password',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
    /**
     * Get all of the property for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function property(): HasMany
    {

        return $this->hasMany(Property::class);
    }

   /**
    * Get all of the address for the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
    */
   public function address(): HasOneThrough
   {
       return $this->hasOneThrough(Address::class, Property::class);
   }
   public function sale(): HasOneThrough
   {
       return $this->hasOneThrough(Sale::class, Property::class);
   }
   public function rent(): HasOneThrough
   {
       return $this->hasOneThrough(Rent::class, Property::class);
   }
   public function mortgage(): HasManyThrough
   {
       return $this->hasManyThrough(Mortgage::class, Property::class);
   }
   public function images(): HasOneThrough
   {
       return $this->hasOneThrough(Image::class, Property::class);
   }
   /**
    * Get the about associated with the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function about(): HasOne
   {
       return $this->hasOne(About::class);
   }
   public function footer(): HasOne
   {
       return $this->hasOne(Footer::class);
   }



}
