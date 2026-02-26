<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    /** @use HasFactory<\Database\Factories\ContractorFactory> */
    use HasFactory;

    protected $fillable = [
        'company_name',
        'license_number',
        'team_members_count',
        'projects_completed',
        'rating',
        'specializations',
        'verification_status',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'specializations' => 'array',
    ];

    public function users()
    {
        return $this->morphMany(User::class, 'actor'); // Assuming 'User' or 'UserProfile' morphs to 'actor'
        // Wait, the request says "users" morph to contractors. Usually users table has the profile, but let's assume User or UserProfile.
        // Clarification from #1 User_profiles: Actor_id, Actor_type.
        // So UserProfile morphs to Contractor.
    }

    public function profile()
    {
        return $this->morphOne(UserProfile::class, 'actor');
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
