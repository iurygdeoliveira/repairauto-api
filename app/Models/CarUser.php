<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CarUser extends Pivot
{
    protected $fillable = [
        'brand_id',
        'car_id',
        'plate',
        'photo'
    ];

    // Uma loja possui muitas ordens
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
