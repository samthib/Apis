@extends('layouts.master')

@section('content')


  {{-- <div class="container"> --}}

    {{-- <div class="d-flex justify-content-center align-items-center min-vh-100">
      <div class="h1 text-white text-center">
        <p class=""><b>Under construction ...</b></p>
        <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
      </div>
    </div> --}}

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>I'm <b>Samuel Thibault, Web Developer</b>. I made this website to show you what you can do whith APIs datas.</p>
        <p>If you have an idea about exploiting datas don't hesitate to contact me, we will discuss on how I can help you.</p>
        <p>If you have the need of a website for you or your business, if you need online presence I can assist you.</p>
        <p>You can take a look at my <a href="http://samuel-thibault.fr" style="text-decoration:none" target="_blank"><b>website</b></a> to see my others works.</p>
        <p><a class="btn btn-info btn-lg" href="{{ route('contact.create') }}" role="button">Contact me</a></p>
      </div>
    </div>

    <div class="container p-5">
      <!-- Example row of columns -->
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
          <p>Instant Answer API gives free access to many Duckduckgo instant answers like: topic summaries, categories, disambiguation, and !bang redirects.<br>
            <b>The API return informations: an abstract, a picture, links, .... for a specific search.</b>
          </p>
        </div>
        <div class="col-sm-6 col-md-4">
          <img class="feature-icon" src="{{ asset('storage/img/fixer_money_light.png') }}" alt="">
          <h2>Fixer</h2>
          <p>Fixer is a simple and lightweight API forcurrent and historical foreign exchange (forex) rates.<br>
            <b>  The API return the rate and amount of a list of currencies for an amount of Euro.</b>
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
            <b>The API send a code by SMS to a given phone number, which the user can verify to simulate a verification by SMS.</b>
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
          {{-- <img class="feature-icon" src="{{ asset('storage/img/logo-youtube.svg') }}" alt=""> --}}
          <i class="feature-icon fa fa-cogs fa-2x" aria-hidden="true"></i>
          <h2>Coming ...</h2>
          <p>New APIs will come later, stay tuned ...</p>
        </div>

      </div>


    </div> <!-- /container -->


  {{-- </div> --}}


@endsection
