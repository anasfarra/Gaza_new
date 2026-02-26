<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionPhase extends Model
{
    /** @use HasFactory<\Database\Factories\ConstructionPhaseFactory> */
    use HasFactory;

    protected $fillable = [
        'project_id',
        'phase_name',
        'description',
        'status',
        'start_date',
        'end_date',
        'budget_allocated',
        'budget_spent',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'budget_allocated' => 'decimal:2',
        'budget_spent' => 'decimal:2',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}
