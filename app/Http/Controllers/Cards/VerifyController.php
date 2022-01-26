<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VerifyController extends Controller
{
    /**
    * Return verify datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $phone = $request->phone;
        $code = $request->code;
        $request_id = $request->request_id;

        // set API Endpoint and API key
        $access_key = config('app.nexmo_key', '');
        $access_secret = config('app.nexmo_secret', '');
        $brand = 'Samuel+Thibault';

        if (!empty($code)) {
            $response = Http::get('https://api.nexmo.com/verify/check/json', [
            'api_key' => $access_key,
            'api_secret' => $access_secret,
            'request_id' => $request_id,
            'code' => $code,
            ]);
        } elseif (!empty($phone)) {
            $response = Http::get('https://api.nexmo.com/verify/json', [
            'api_key' => $access_key,
            'api_secret' => $access_secret,
            'number' => $phone,
            'brand' => $brand,
            ]);
        } else {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a phone number',
            ]);
        }

        if (empty($response->json())) {
            return response()->json(['status' => 'FAIL',
            'error' => 'Enter a valid phone number',
            ]);
        } else {
            return $response->json();
        }
    }
}
