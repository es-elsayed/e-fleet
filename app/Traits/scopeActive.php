<?php

namespace App\Traits;

trait scopeActive
{
    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeNoActive($query)
    {
        return $query->where('is_active', 0);
    }
}
