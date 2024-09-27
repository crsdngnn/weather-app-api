<?php

namespace App\Repositories;

use App\Interfaces\LocationInterface;
use App\Services\GeoApifyService;

class LocationRepository implements LocationInterface
{
    public function __construct(
        protected GeoApifyService $geoApifyService
    )
    {
    }
    public function getLocation($data)
    {
        $response = $this->geoApifyService->execute($data);

        return response()->json($response);
        
    }
}