<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller{
    public function index(Request $request){
        $city = $request->input('city', ''); // kosong default

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q'     => $city,
            'appid' => env('OPENWEATHER_API_KEY'),
            'units' => 'metric'
        ]);

        $weatherData = $response->json();

        if (!isset($weatherData['name'])) {
            return view('weather', [
                'error'       => $weatherData['message'] ?? '',
                'weatherData' => null,
                'city'        => $city
            ]);
        }

        return view('weather', compact('weatherData', 'city'));
    }

}