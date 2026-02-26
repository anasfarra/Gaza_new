<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'phone_prefix',
        'flags',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function profiles()
    {
        return $this->hasMany(UserProfile::class);
    }
}
