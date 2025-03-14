<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserType extends Model
{
    protected $fillable = [
        'name'
    ];

    //  Ele indica que um UserType tem muitos Users.
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
