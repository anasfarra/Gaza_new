<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    /** @use HasFactory<\Database\Factories\DonorFactory> */
    use HasFactory;

    protected $fillable = [
        'total_donations',
        'donation_count',
        'rating',
        'verification_status',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->morphOne(UserProfile::class, 'actor');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
