<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;

        protected $fillable = [
        'admin_level',
        'permissions',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'permissions' => 'array',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->morphOne(UserProfile::class, 'actor');
    }

    public function compensationRequests()
    {
        return $this->hasMany(CompensationRequest::class);
    }

    public function damageReports() // Admin validates damage reports
    {
        return $this->hasMany(DamageReport::class, 'verified_by'); // Assuming 'verified_by' is the admin ID column
    }
}
