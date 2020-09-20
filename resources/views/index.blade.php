@extends('layouts.master')


@section('content')

  <div class="container-fluid p-5">
    <div class="row">

      @include('cards.currencies')

      @include('cards.youtube')

      @include('cards.search')

      @include('cards.stocks')

      @include('cards.verify')

      @include('cards.weather')

      @include('cards.map')

      {{-- @include('cards.twitter')

      @include('cards.facebook')

      @include('cards.instagram') --}}


      @include('cards.movies')

      {{-- @include('cards.news')

      @include('cards.football')

      @include('cards.travel')

      @include('cards.flights') --}}

    </div>
  </div>


  <!-- Javascript Leaflet for opentstreetmap -->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

@endsection
