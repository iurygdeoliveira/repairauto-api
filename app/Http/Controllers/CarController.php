<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Services\CarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(protected CarService $carService) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cars = $this->carService->list($request);
        return $cars;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
