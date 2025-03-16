<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class BrandService
{
    public function list(Request $request)
    {
        $brand = Brand::query();

        return $brand->get();
    }
}
