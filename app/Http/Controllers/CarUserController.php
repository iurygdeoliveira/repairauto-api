<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarUserStoreRequest;
use App\Http\Resources\CarResource;
use App\Http\Resources\UserResource;
use App\Services\CarUserService;
use Illuminate\Http\Request;

class CarUserController extends Controller
{
    public function __construct(protected CarUserService $carUserService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarResource::collection(auth()->user()->cars->load('brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarUserStoreRequest $request)
    {
        $user = auth()->user();
        $this->carUserService->store($user, $request);
        return CarResource::collection($user->cars->load('brand'));
    }
}
