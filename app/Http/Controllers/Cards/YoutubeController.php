<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YoutubeController extends Controller
{
    /**
    * Return Youtube datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
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
}
