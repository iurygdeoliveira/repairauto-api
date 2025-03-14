<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    protected $fillable = [
        'name'
    ];

    // Um Status possui muitas ordens
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
