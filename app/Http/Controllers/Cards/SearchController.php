<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    /**
    * Return search datas from API.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch(Request $request)
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
}
