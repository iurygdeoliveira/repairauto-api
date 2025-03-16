<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\AuthResource;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService) {}

    public function login(LoginRequest $request)
    {
        $user = $this->authService->login($request);
        return AuthResource::make($user->load('cars'));
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authService->store($request);
        return AuthResource::make($user->load('cars'));
    }

    // public function logout()
    // {
    //     $this->authService->logout();
    // }
}
