<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

use App\CountrySymbol;

class CardController extends Controller
{
  /**
  * Display a listing of cards from APIs available.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $symbols = CountrySymbol::getSymbols();

    return view('pages.cards')->with('symbols', $symbols);
  }
}