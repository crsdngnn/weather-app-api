<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class GeoApifyService
{

    public function execute($data) 
    {
        try {
            $response = Http::get(config('geoapify.geoapify.url'), [
                'text' => $data['text'],
                'apiKey' => config('geoapify.geoapify.key'),
            ]);
            return json_decode($response);
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['Something went wrong!']);
        }
    }
}
