<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapController extends Controller
{
    /**
    * Return map datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $adress = $request->number.",".$request->street.",".$request->city.",".$request->country;

        if (!empty($request->city)) {
            $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'q' => $adress,
            'format' => 'json',
            ]);
        } else {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a correct adress',
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
