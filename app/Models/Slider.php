<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory,scopeActive;

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'action_title_en',
        'action_title_ar',
        'action_url',
        'image',
        'alt_en',
        'alt_ar',
        'is_active',
    ];

}
