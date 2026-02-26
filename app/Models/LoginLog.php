<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    /** @use HasFactory<\Database\Factories\LoginLogFactory> */
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'device_type',
        'logged_in_at',
        'logged_out_at',
        'user_id',
    ];

    protected $casts = [
        'logged_in_at' => 'datetime',
        'logged_out_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
