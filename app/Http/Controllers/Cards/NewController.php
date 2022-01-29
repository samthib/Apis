<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewController extends Controller
{
    /**
     * Return news datas from API.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        $category = $request->category;
        $country = $request->country;

        // set API Endpoint and API key
        $access_key = config('app.newsapi_key', '');

        if (!empty($category) && !empty($country)) {
            $response = Http::get('https://newsapi.org/v2/top-headlines', [
                'category' => $category,
                'country' => $country,
                'pageSize' => '12',
                'apiKey' => $access_key,
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
