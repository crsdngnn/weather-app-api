<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\LocationInterface;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct(
        protected LocationInterface $locationInterface
    ) {
    }

    public function getLocation(Request $request)
    {
        return $this->locationInterface->getLocation($request->all());
    }
}
