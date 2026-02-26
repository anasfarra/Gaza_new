<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    /** @use HasFactory<\Database\Factories\DonationFactory> */
    use HasFactory;

     protected $fillable = [
        'donor_id',
        'project_id',
        'amount',
        'currency',
        'status',
        'donation_date',
        'notes',
    ];
    protected $casts = [
        'amount' => 'decimal:2',
        'donation_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'payable');
    }
}
