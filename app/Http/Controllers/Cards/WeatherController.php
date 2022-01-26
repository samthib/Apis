<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Return weather datas from API.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        $city = $request->city;
        $lat = $request->latitude;
        $lon = $request->longitude;

        // set API Endpoint and API key
        $access_key = config('app.openwheatermap_key', '');

        if (!empty($lat) && !empty($lon)) {
            $response = Http::get('api.openweathermap.org/data/2.5/weather', [
                'lat' => $lat,
                'lon' => $lon,
                'units' => 'metric',
                'APPID' => $access_key,
            ]);
        } elseif (!empty($city)) {
            $response = Http::get('api.openweathermap.org/data/2.5/weather', [
                'q' => $city,
                'units' => 'metric',
                'APPID' => $access_key,
            ]);
        } else {
            return response()->json(['status' => 'FAIL',
                'error' => 'Enter a city name or position by latitude and longitude',
            ]);
        }

        if (empty($response->json())) {
            return response()->json(['status' => 'FAIL',
                'error' => 'No datas for this entry',
            ]);
        } else {
            return $response->json();
        }
    }
}
