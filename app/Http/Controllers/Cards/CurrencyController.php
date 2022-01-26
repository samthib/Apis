<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    /**
    * Return currencies datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $symbol = $request->symbol;
        $quantity = $request->quantity;

        // set API Endpoint and API key
        $access_key = config('app.fixer_key', '');

        if (!empty($symbol) && !empty($quantity)) {
            $response = Http::get('http://data.fixer.io/api/latest', [
            'access_key' => $access_key,
            'symbols' => $symbol,
            ]);
        } else {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a currency and an amount',
            ]);
        }


        if (empty($response->json())) {
            return response()->json(['status' => 'FAIL',
            'error' => 'No datas for this entry',
            ]);
        } else {
            // Access the exchange rate values, e.g. GBP:
            $rate = $response['rates'][$symbol];

            $json = $response->json();

            // Add the result computed to the array from API
            $json['quantity'] = $quantity;
            $json['change'] = number_format($quantity * $rate, 4, '.', '');

            return $json;
        }
    }
}
