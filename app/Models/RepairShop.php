<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RepairShop extends Model
{
    /** @use HasFactory<\Database\Factories\RepairShopFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'tax_id',
        'description',
        'lat',
        'lng',
    ];

    // Um carro pertence a muitas lojas
    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class);
    }

    // Uma loja possui muitas ordens
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
