<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\WeatherInterface;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function __construct(
        protected WeatherInterface $weatherInterface
    ) {
    }

    public function getWeather(Request $request)
    {
        return $this->weatherInterface->getWeather($request->all());
    }
}
