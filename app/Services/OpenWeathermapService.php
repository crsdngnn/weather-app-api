<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class OpenWeathermapService
{

    public function execute($data) 
    {
        try {
            $response = Http::get(config('openweather.open_weather_api.url'), [
                'lon' => $data['lon'],
                'lat' => $data['lat'],
                'apiKey' => config('openweather.open_weather_api.key'),
                'units'  => 'metric'
            ]);

            return json_decode($response);
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['Something went wrong!']);
        }
    }
}
