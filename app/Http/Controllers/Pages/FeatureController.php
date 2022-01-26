<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    /**
     * Display a listing of the APIs available.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.features');
    }
}
