<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Brand;
use App\Models\User;
use App\Models\RepairShop;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name'
    ];

    // Um carro pertence a uma marca
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    // Um Carro pertence a muitos usuários
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('plate');
    }

    // Um pertence a muitas lojas
    public function repairShops(): BelongsToMany
    {
        return $this->belongsToMany(RepairShop::class);
    }
}
