<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    /** @use HasFactory<\Database\Factories\BeneficiaryFactory> */
    use HasFactory;

    protected $fillable = [
        'national_id',
        'family_members_count',
        'family_members_names', // JSON
        'identification_verified_at',
        'email',
        'password',
        'email_verified_at',
        'damage_area_id', // Assuming this FK exists based on "damage_areas ... FK <= beneficiaries"
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
        'identification_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'family_members_names' => 'array',
    ];

    public function profile()
    {
        return $this->morphOne(UserProfile::class, 'actor');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function damageReports()
    {
        return $this->hasMany(DamageReport::class);
    }

    public function compensationRequests()
    {
        return $this->hasMany(CompensationRequest::class);
    }

    public function damageArea()
    {
        return $this->belongsTo(DamageArea::class);
    }
}
