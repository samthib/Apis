<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TwitterController extends Controller
{
    /**
    * Return Twitter datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
    {
        $query = $request->search;

        // set API Endpoint and API key
        $access_key = config('app.twitter_token', '');

        if (!empty($query)) {
            $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$access_key,
            ])->get('https://api.twitter.com/2/users/by/username/'.$query, [
            'expansions' => 'pinned_tweet_id',
            'user.fields' => 'created_at,description,entities,id,location,name,pinned_tweet_id,profile_image_url,protected,public_metrics,url,username,verified,withheld',
            'tweet.fields' => 'created_at',
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
