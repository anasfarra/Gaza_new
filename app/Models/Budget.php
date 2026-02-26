<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    /** @use HasFactory<\Database\Factories\BudgetFactory> */
    use HasFactory;

    protected $fillable = [
        'allocated_amount',
        'spent_amount',
        'remaining_amount',
        'breakdown',
        'project_id',
    ];

    protected $casts = [
        'allocated_amount' => 'decimal:2',
        'spent_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
        'breakdown' => 'array',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    
}
