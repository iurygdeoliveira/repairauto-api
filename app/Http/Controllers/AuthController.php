<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\AuthResource;
use App\Services\AuthServices;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected AuthServices $authServices) {}

    public function login(LoginRequest $request)
    {
        $user = $this->authServices->login($request);
        return AuthResource::make($user->load('cars'));
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authServices->store($request);
        return AuthResource::make($user->load('cars'));
    }

    public function logout()
    {
        $this->authServices->logout();
    }
}
