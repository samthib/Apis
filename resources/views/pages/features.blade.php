@extends('layouts.master')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">

    <div class="row">
      <div class="col-md-8">
        <h1 class="display-3">APIs list & features</h1>
        <p>Below is a list of the differents <a class="text-info" href="{{ route('about') }}"><b>APIs</b></a> services
          used on this website. Some of them are from well known websites, other are from open sources providers but
          nonetheless usefull.</p>
        <p>Only a small sample of the potential of thoses APIs is shown here, much more complexity and services can be
          achieved for all of them.</p>
        <p>I will be happy to help you do so.</p>

        <p><a class="btn btn-info btn-lg" href="{{ route('contact.create') }}" role="button">Contact me</a></p>
      </div>

      <div class="col-md-4">
        <img src="{{ asset('storage/img/apis-list.svg') }}" alt="" class="img-rounded center-block w-100">
      </div>
    </div>

  </div>
</div><!-- Main jumbotron -->

<div class="container p-5">
  <!-- row -->
  <div class="row text-white">
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/Twitter_Logo_Blue.png') }}" alt="">
      <h2>Twitter</h2>
      <p>Publish and analyze Tweets, optimize ads, and create unique customer experiences.<br>
        <b>The API return the Tweeter informations for an user and his picked Tweet if any.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/logo-youtube.svg') }}" alt="">
      <h2>Youtube</h2>
      <p>Used to upload videos, manage playlists and subscriptions, update channel settings, and more.<br>
        <b>The API return a dozen of videos for a specific search on Youtube.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/blue_square_tmdb.svg') }}" alt="">
      <h2>TheMovieDB</h2>
      <p>The API service is for those interested in using movie, TV show or actor images and/or data from TMDB.<br>
        <b>The API return an image and an abstract with few informations for a researched movie title.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/Flickr.png') }}" alt="">
      <h2>Flickr</h2>
      <p> Get members photos and metadata, such as license information, geolocation, people, tags, etc.<br>
        <b>The API return a dozen of photos for a specific search on Flickr.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/duckduckgo-logo.svg') }}" alt="">
      <h2>Duckduckgo</h2>
      <p>Instant Answer API gives free access to many Duckduckgo instant answers like: topic summaries, categories,
        disambiguation, and !bang redirects.<br>
        <b>The API return informations: an abstract, a picture, links, .... for a specific search.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/fixer_money_light.png') }}" alt="">
      <h2>Fixer</h2>
      <p>Fixer is a simple and lightweight API forcurrent and historical foreign exchange (forex) rates.<br>
        <b> The API return the rate and amount of a list of currencies for an amount of Euro.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/yelp.png') }}" alt="">
      <h2>Yelp</h2>
      <p>Crowd-sourced local business review and social networking site.<br>
        <b>The API return a list of business informations with phostos for a business type and location.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/osm_logo.svg') }}" alt="">
      <h2>OpenStreetMap</h2>
      <p>OpenStreetMap is a world map, created by common people and free to use under a free license.<br>
        <b>The API return a expandable map pointed on a chosen adress.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/VonageLogo.svg') }}" alt="">
      <h2>Vonage</h2>
      <p>Vonage (formerly Nexmo), everything to build connected applications, SMS, Voice, Video, Verify, ...<br>
        <b>The API send a code by SMS to a given phone number, which the user can verify to simulate a verification by
          SMS.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/logo_white_cropped.png') }}" alt="">
      <h2>OpenWeather</h2>
      <p>Get Forecast (for 10 days with 3-hour step), Historical, and Current weather maps.<br>
        <b>The API return the actual weather for a given city or given latitude & longitude.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/logo-gradient2-finnhub.png') }}" alt="">
      <h2>Finnhub</h2>
      <p>Free realtime stocks market data, global company fundamentals, economic data, and alternative data.<br>
        <b>The API return the actual value for a given stock symbol(on US market), with its daily evolution.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <img class="feature-icon" src="{{ asset('storage/img/news.png') }}" alt="">
      <h2>NewsApi</h2>
      <p>Breaking news headlines from news sources and blogs across the web.<br>
        <b>The API return list of articles by category for a specific country.</b>
      </p>
    </div>
    <div class="col-sm-6 col-md-4">
      <i class="feature-icon fa fa-cogs fa-2x" aria-hidden="true"></i>
      <h2>Coming ...</h2>
      <p>New APIs will come later, stay tuned ...</p>
    </div>

  </div><!-- row -->


</div> <!-- /container -->

@endsection