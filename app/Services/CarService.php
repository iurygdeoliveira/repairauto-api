<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class CarService
{
    public function list(Request $request)
    {
        $car = Car::query();

        if ($request->has('brand_id') && $request->brand_id != 'null') {
            $car->where('brand_id', $request->brand_id);
        }

        return $car->get();
    }
}
