<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'location',
        'category',
        'status',
        'consultant',
        'main_contractor',
        'subcontractor',
        'bua',
        'description',
        'main_image',
        'featured',
        'sort_order',
        'start_date',
        'completion_date',
    ];

    protected $casts = [
        'bua' => 'decimal:2',
        'featured' => 'boolean',
        'start_date' => 'date',
        'completion_date' => 'date',
    ];

    /**
     * Project Images
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)
            ->orderBy('sort_order');
    }
}