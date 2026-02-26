<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /** @use HasFactory<\Database\Factories\UserProfileFactory> */
    use HasFactory;
    protected $table = 'user_profiles';

    protected $fillable = [
        'name',
        'phone',
        'status',
        'role_id',
        'country_id',
        'last_login_at',
        'actor_id',
        'actor_type',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
        public function actor()
    {
        return $this->morphTo();
    }

}
