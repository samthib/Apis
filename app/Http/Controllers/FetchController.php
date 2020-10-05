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
* Return Youtube data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function youtube(Request $request)
{
  $query = $request->search;

  // set API Endpoint and API key
  $access_key = config('app.youtube_key', '');

  if (!empty($query)) {
  $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
    'q' => $query,
    'part' => 'snippet',
    'maxResults' => '12',
    'type' => 'video',
    'key' => $access_key,
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
* Return photos data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function photos(Request $request)
{
  $query = $request->search;

  // set API Endpoint and API key
  $access_key = config('app.flickr_key', '');

  if (!empty($query)) {
  $response = Http::get('https://www.flickr.com/services/rest', [
    'tags' => $query,
    'per_page' => '12',
    'media' => 'photos',
    'method' => 'flickr.photos.search',
    'safe_search' => '1',
    'content_type' => '1',
    'api_key' => $access_key,
    'format' => 'json',
    'nojsoncallback' => '1',
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
* Return business data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function business(Request $request)
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

/**
* Return TMDB data from API.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function movies(Request $request)
{
  $query = $request->search;

  // set API Endpoint and API key
  $access_key = config('app.tmdb_key', '');

  if (!empty($query)) {
  $response = Http::get('https://api.themoviedb.org/3/search/movie', [
    'query' => $query,
    'api_key' => $access_key,
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
