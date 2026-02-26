<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageArea extends Model
{
    /** @use HasFactory<\Database\Factories\DamageAreaFactory> */
    use HasFactory;

    protected $fillable = [
        'street_name',
        'address_details',
        'latitude',
        'longitude',
        'city_id', 
    ];

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}
