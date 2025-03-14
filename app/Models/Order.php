<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = [
        'repair_shop_id',
        'status_id',
        'user_id',
        'total',
        'car_user_id',
    ];

    // Uma ordem pertence a muitas lojas
    public function repairShop(): BelongsTo
    {
        return $this->belongsTo(RepairShop::class);
    }

    // Uma ordem pertence a um CarUser
    public function carUser(): BelongsTo
    {
        return $this->belongsTo(CarUser::class);
    }

    // Uma ordem pertence a um status
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
