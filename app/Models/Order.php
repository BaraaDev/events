<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_to()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(EventOrder::class,'event_id','id');
    }
}
