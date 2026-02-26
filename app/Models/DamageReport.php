<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageReport extends Model
{
    /** @use HasFactory<\Database\Factories\DamageReportFactory> */
    use HasFactory;

    protected $fillable = [
        'property_type',
        'damage_level',
        'description',
        'estimated_cost',
        'is_verified',
        'verified_by',
        'verified_at',
        'beneficiary_id',
    ];

    protected $casts = [
        'estimated_cost' => 'decimal:2',
        'is_verified' => 'boolean',
        'verified_at' => 'datetime',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function verifier() // Admin
    {
        return $this->belongsTo(Admin::class, 'verified_by');
    }

    public function project()
    {
        return $this->hasOne(Project::class); // Project has damage_report_id
    }

    public function compensationRequests()
    {
        return $this->hasMany(CompensationRequest::class);
    }
}
