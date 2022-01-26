@extends('layouts.master')


@section('content')

  <div class="container-fluid p-sm-5">
    <div class="row">

      @include('cards.twitter')

      @include('cards.youtube')

      @include('cards.movies')

      @include('cards.photos')

      @include('cards.searches')

      @include('cards.currencies')

      @include('cards.businesses')

      @include('cards.maps')

      @include('cards.verify')

      @include('cards.weather')

      @include('cards.stocks')

      {{-- @include('cards.instagram')

      @include('cards.facebook')

      @include('cards.news')

      @include('cards.footballs')

      @include('cards.travel')

      @include('cards.flights') --}}

    </div>
  </div>


  <!-- Javascript Leaflet for opentstreetmap -->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

@endsection
