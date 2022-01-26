<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BusinessController extends Controller
{
    /**
    * Return business datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $query = $request->search;
        $location = $request->location;

        // set API Endpoint and API key
        $access_key = config('app.yelp_key', '');

        if (!empty($query)) {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$access_key,
        ])->get('https://api.yelp.com/v3/businesses/search', [
            'term' => $query,
            'location' => $location,
            'limit' => '12',
        ]);
        } else {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a query',
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
