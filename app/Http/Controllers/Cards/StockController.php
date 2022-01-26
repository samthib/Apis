<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{
    /**
    * Return stocks datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $stock = $request->stock;

        // set API Endpoint and API key
        $access_key = config('app.finnhub_key', '');

        if (!empty($stock)) {
        $response = Http::get('https://finnhub.io/api/v1/quote', [
            'symbol' => $stock,
            'token' => $access_key,
        ]);
        } else {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a stock symbol',
            ]);
        }

        if (empty($response->json())) {
            return response()->json(['status' => 'FAIL',
            'error' => 'No datas for this entry',
            ]);
        } else {
            // Set the nominal and relative change
            $change = $response['c'] - $response['pc'];
            $percentChange = 100 * $change / $response['pc'];

            $json = $response->json();

            // Add the result computed to the array from API
            $json['change'] = number_format($change, 2, '.', '');
            $json['percentchange'] = number_format($percentChange, 2, '.', '');
            $json['symbol'] = $stock;

            return $json;
        }
    }
}
