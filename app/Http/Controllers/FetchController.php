<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\CountrySymbol;


class FetchController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $symbols = CountrySymbol::getSymbols();

    return view('index')->with('symbols', $symbols);
  }

  /**
  * Return map data from API.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function map(Request $request)
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

/**
* Return weather data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function weather(Request $request)
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

/**
* Return verify data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function verify(Request $request)
{
  $phone = $request->verifyPhone;
  $code = $request->verifyCode;
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

/**
* Return search data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function search(Request $request)
{
  $query = $request->search;

  if (!empty($query)) {
  $response = Http::get('https://api.duckduckgo.com/', [
    'q' => $query,
    'format' => 'json',
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

/**
* Return stocks data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function stocks(Request $request)
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

/**
* Return currencies data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function currencies(Request $request)
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

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
  //
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
  //
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
  //
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  //
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
  //
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
  //
}
}
