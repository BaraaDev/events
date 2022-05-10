<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'username', 'email', 'phone', 'bio', 'password', 'gender', 'dob', 'address', 'postal_code', 'state_province',
        'country_id', 'governorate_id', 'city_id', 'facebook', 'twitter', 'instagram', 'whatsApp', 'telegram'
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
    ];

    public function event(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Event::class,'create_user_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('avatar')
            ?  $this->getFirstMediaUrl('avatar')
            : asset('website/signin_dark.png');
    }

    public function scopeType($query,$arg)
    {
        return $query->where('user_type',$arg);
    }
}
