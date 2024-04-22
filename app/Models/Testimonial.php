<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'rate',
        'confirmed_at'
    ];

    protected $casts = [
        'confirmed_at' => 'datetime',
    ];

    public function scopeConfirmed($query)
    {
        return $query->where('confirmed_at', '!=', null);
    }

    public function isConfirmed()
    {
        return $this->confirmed_at !== null;
    }
}
