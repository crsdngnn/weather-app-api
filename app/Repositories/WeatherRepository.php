<?php

namespace App\Repositories;

use App\Interfaces\WeatherInterface;
use App\Services\OpenWeathermapService;

class WeatherRepository implements WeatherInterface
{
    public function __construct(
        protected OpenWeathermapService $openWeathermapService
    )
    {
    }
    public function getWeather($data)
    {
        $response = $this->openWeathermapService->execute($data);

        return response()->json($response);
        
    }
}