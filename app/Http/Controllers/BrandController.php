<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Services\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function __construct(protected BrandService $brandService) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brand = $this->brandService->list($request);
        return $brand;
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
