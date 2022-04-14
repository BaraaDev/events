<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    protected $fillable = ['country_id', 'governorate_id'];

    use HasFactory, HasTranslations, SoftDeletes;
    public $translatable = ['name', 'content'];

    public function governorate()
    {


        return $this->belongsTo(Governorate::class);
    }

    public function country()
    {


        return $this->belongsTo(Country::class);
    }
}
