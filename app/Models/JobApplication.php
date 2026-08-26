<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CareerJob;

class JobApplication extends Model
{
    protected $fillable = [
        'career_job_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'cv',
    ];

    public function careerJob(): BelongsTo
    {
        return $this->belongsTo(CareerJob::class);
    }
}
