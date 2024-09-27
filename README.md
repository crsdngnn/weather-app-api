# weather-app-api

## Overview

The Weather App is a simple web application built with Laravel that provides users with real-time weather information based on their location.

## Features

- Search for weather by city name
- Display current temperature, humidity, and wind speed

## Tech Stack

- **Backend:** Laravel
- **API:** OpenWeatherMap or Geoapify API

## Installation

### Prerequisites

- PHP >= 7.3
- Composer

### Steps

1. **Clone the repository:**

   ```bash
   git clone https://github.com/crsdngnn/weather-app-api.git
   cd weather-app-api
   
2. **Create .env file:**

   ```bash
   touch .env

3. **Add api key in the .env file:**
   ```bash
   
   OPEN_WEATHER_API_KEY='20a3b5b781c7fe931b795c77172d16c8'
   OPEN_WEATHER_API_URL='https://api.openweathermap.org/data/2.5/weather/'
   
   GEOAPIFY_API_KEY='bd6f1d02864049c2a0f7d91cc21266aa'
   GEOAPIFY_API_URL='https://api.geoapify.com/v1/geocode/search/'

4. **Install dependencies**
   ```bash
   composer install

5. **Install dependencies**
   ```bash
   php artisan key:generate
   php artisan migrate
   php artisan serve
   
   
   
