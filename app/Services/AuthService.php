<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthServices
{
    public function login(LoginRequest $request): User
    {
        $user = User::where('email', $request->get('email'))->first();

        if (!$user || ! Hash::check($request->get('password'), $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email ou senha incorreta.'],
            ]);
        }

        return $user;
    }

    public function store(RegisterRequest $request): User
    {
        $user = User::create([...$request->validated(), 'user_type_id' => 2]);
        return $user;
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
    }
}
