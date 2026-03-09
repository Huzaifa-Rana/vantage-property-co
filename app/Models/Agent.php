<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'profile_image', 'bio'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
