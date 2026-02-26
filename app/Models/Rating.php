<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /** @use HasFactory<\Database\Factories\RatingFactory> */
    use HasFactory;

    protected $fillable = [
        'rateable_type',
        'rateable_id',
        'score',
        'comment',
    ];

    public function rateable()
    {
        return $this->morphTo();
    }
}
