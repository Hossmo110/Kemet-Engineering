<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\JobApplication;

class CareerJob extends Model
{
    protected $table = 'career_jobs';

    protected $fillable = [
        'title',
        'location',
        'department',
        'type',
        'description',
        'responsibilities',
        'qualifications',
        'posted_at',
        'expires_at',
    ];

    protected $casts = [
        'posted_at' => 'date',
        'expires_at' => 'date',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
}
