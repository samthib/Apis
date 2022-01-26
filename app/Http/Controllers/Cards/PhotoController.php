<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    /**
    * Return photos datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
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
}
