<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;

    protected $fillable = [
        'business_license_number',
        'registration_number',
        'products_count',
        'rating',
        'verification_status',
        'verified_at',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

   
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
