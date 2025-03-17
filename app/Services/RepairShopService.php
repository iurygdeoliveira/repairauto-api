<?php

namespace App\Services;

use App\Models\Car;
use App\Models\RepairShop;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class RepairShopServices
{
    public function list(Request $request): Collection
    {
        $repairshops = RepairShop::query();

        if ($request->has('car_name') && $request->car_name != 'null') {
            $car = Car::where('name', $request->get('car_name'))->first();

            $repairshops = $repairshops->whereHas('cars', function ($query) use ($car) {
                $query->where('car_id', $car->id);
            });
        }

        if ($request->has('lat') && $request->has('lng') && $request->has('distance') && $request->distance > 0) {
            $repairshops = $repairshops->select('*')
                ->selectRaw(
                    "(6371 * acos(cos(radians(?)) * cos(radians(lat)) * cos(radians(lng) - radians(?)) + sin(radians(?)) * sin(radians(lat)))) as distance",
                    [$request->lat, $request->lng,  $request->lat]
                )->having("distance", "<", $request->distance)
                ->orderBy("distance");
        }

        $repairshops = $repairshops->get();

        return $repairshops;
    }
}
