<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory, scopeActive;

    protected $fillable = [
        'name_en',
        'name_ar',
        'is_active'
    ];
}
