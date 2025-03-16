<?php

namespace App\Services;

use App\Http\Requests\CarUserStoreRequest;
use App\Models\User;

class CarUserService
{
    public function store(User $user, CarUserStoreRequest $data): void
    {
        $path = $data->file('photo')->store('cars');
        $user->cars()->attach($data->car_id, ['plate' => $data['plate'], 'cover' => $path]);
    }
}
