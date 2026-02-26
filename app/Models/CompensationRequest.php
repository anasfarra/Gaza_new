<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompensationRequest extends Model
{
    /** @use HasFactory<\Database\Factories\CompensationRequestFactory> */
    use HasFactory;

    protected $fillable = [
        'beneficiary_id',
        'damage_report_id',
        'admin_id',
        'request_number',
        'request_type',
        'requested_amount',
        'approved_amount',
        'status',
        'rejection_reason',
        'submitted_at',
        'reviewed_at',
    ];

    protected $casts = [
        'requested_amount' => 'decimal:2',
        'approved_amount' => 'decimal:2',
        'submitted_at' => 'datetime',
        'reviewed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function damageReport()
    {
        return $this->belongsTo(DamageReport::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }


    public function isApproved()
    {
        return $this->status === 'approved';
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'payable');
    }
}
