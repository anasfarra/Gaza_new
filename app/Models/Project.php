<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'damage_report_id',
        'beneficiary_id',
        'contractor_id',
        'project_type',
        'status',
        'start_date',
        'end_date',
        'progress_percentage',
        'total_budget',
        'spent_amount',
        'featured',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'total_budget' => 'decimal:2',
        'spent_amount' => 'decimal:2',
        'featured' => 'boolean',
    ];

    public function damageReport()
    {
        return $this->belongsTo(DamageReport::class);
    }

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function constructionPhases()
    {
        return $this->hasMany(ConstructionPhase::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
