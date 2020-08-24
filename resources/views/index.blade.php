@extends('layouts.master')


@section('content')

  <div class="container-fluid p-5">
    <div class="row">

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/shutterstock_1368556547_small.jpg') }}');">
          <div class="card-header">
            <h5 class="card-title">Currency Converter API</h5>
            <a href="https://fixer.io/" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img//fixer_money_light.png') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Provides exchange rates based on the official banks datas.</p>

            <form class="" id="currenciesPOST" action="{{ route('fetch.currencies') }}">
              <div class="row">
                <fieldset class="form-group col-6">
                  <label for="quantity"><b>Amount &euro;</b></label>
                  <input type="number" name="quantity" class="form-control" placeholder="100" min="0">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="symbol"><b>To</b></label>
                  <select class="form-control" name="symbol">
                    @foreach ($symbols as $key => $symbol)
                      <option value="{{ $key }}">{{ $symbol }}</option>
                    @endforeach
                  </select>
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="currenciesBlock" class="response-block" style="display: none;">
                <h4 id="currenciesResult"></h4>
                <h6 id="currenciesRate"></h6>
                <h6 id="currenciesRateInverse"></h6>
              </div>
            </div>


            <fieldset class="form-group">
              <textarea id="currenciesReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://fixer.io/" class="text-white" target="_blank">Datas provider: <b>fixer.io</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/stock-exchange.jpeg') }}');">
          <div class="card-header">
            <h5 class="card-title">Stock Price API</h5>
            <a href="https://finnhub.io/" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img/logo-gradient2-finnhub.png') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Provide API for realtime stock data, forex and crypto.</p>

            <form class="" id="stocksPOST" action="{{ route('fetch.stocks') }}">
              <div class="row">
                <fieldset class="form-group col-12">
                  <label for="stock"><b>Stock symbol (US market)</b></label>
                  <input type="text" name="stock" class="form-control" placeholder="AAPL">
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="stocksBlock" class="justify-content-between response-block" style="display: none;">
                <ul class="col-4 list-unstyled text-left px-2">
                  <li><small class="text-success">Height: <span id="stocksH" class="text-white"></span></small></li>
                  <li><small class="text-primary">Close: <span id="stocksC" class="text-white"></span></small></li>
                  <li><small class="text-primary">Open: <span id="stocksO" class="text-white"></span></small></li>
                  <li><small class="text-danger">Low: <span id="stocksL" class="text-white"></span></small></li>
                </ul>
                <div class="col-8">
                  <div class="d-flex justify-content-between mx-0">
                    <h5 id="stocksSymbol"></h5>
                    <h5 id="stocksRate"></h5>
                  </div>
                  <small id="stocksDate" class="text-center"></small>
                  <h3 id="stocksResult" class="text-center mt-2"></h3>
                </div>
              </div>
            </div>

            <fieldset class="form-group">
              <textarea id="stocksReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://finnhub.io/" class="text-white" target="_blank">Datas provider: <b>finnhub.io</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/words1.jpg') }}');">
          <div class="card-header">
            <h5 class="card-title">Instant Answer API</h5>
            <a href="https://duckduckgo.com/api" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img/duckduckgo-logo.svg') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Topic summaries, categories, official sites, places, people, definitions and more ...</p>

            <form class="" id="searchPOST" action="{{ route('fetch.search') }}">
              <div class="row">
                <fieldset class="form-group col-12">
                  <label for="search"><b>Search</b></label>
                  <input type="text" name="search" class="form-control" placeholder="Your search ...">
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="searchBlock" class="justify-content-between response-block" style="display: none;">
                <div class="col-12 text-left">
                  <div class="d-flex flex-wrap justify-content-between mx-0">
                    <h4 id="searchTitle" class="mb-1"></h4>
                    <img class="" id="searchIcon" src="" alt="" height="40px">
                  </div>
                  <small><a href="" id="searchUrl"></a></small>
                  <div class="my-4">
                    <p class="my-0" id="searchAbstract">

                    </p>
                    <a href="" id="searchAbstractUrl"></a>
                  </div>

                  <ul class="list-group list-unstyled list-group-horizontal-sm">
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-1" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-2" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-3" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-4" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-5" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                    <li class="mr-2 text-center">
                      <a id="searchLinkIcon-6" href="">
                        <img src="" alt="" height="30px">
                        <p><small></small></p>
                      </a>
                    </li>
                  </ul>

                </div>

              </div>
            </div>

            <fieldset class="form-group">
              <textarea id="searchReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://duckduckgo.com/api" class="text-white" target="_blank">Datas provider: <b>duckduckgo.com</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/computer-safety.jpg') }}');">
          <div class="card-header">
            <h5 class="card-title">Phone verification API</h5>
            <a href="https://www.vonage.com/" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img/VonageLogo.svg') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Implement a "two-factor authentication" by phone in an applications.</p>

            <form class="" id="verifyPOST" action="{{ route('fetch.verify') }}">
              <div class="row">
                <fieldset class="form-group col-12">
                  <label for="verifyPhone"><b>Phone number</b></label>
                  <input type="text" name="verifyPhone" class="form-control" placeholder="+33 612345678">
                </fieldset>
                <fieldset class="form-group col-12">
                  <label for="verifyCode"><b>Verification code</b></label>
                  <input id="request_id" type="hidden" name="request_id" value="">
                  <input id="verifyCode" type="number" name="verifyCode" class="form-control" placeholder="1234" readonly>
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="verifyBlock" class="justify-content-between response-block" style="display: none;">
                <div class="col-12">
                  <div class="text-center mx-0">
                    <h5 id="verifyResult"></h5>
                  </div>
                </div>
              </div>
            </div>

            <fieldset class="form-group">
              <textarea id="verifyReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://www.vonage.com/" class="text-white" target="_blank">Datas provider: <b>vonage.com</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/ciel_soleil_peu_nuageux.jpg') }}')">

          <div class="card-header">
            <h5 class="card-title">Weather API</h5>
            <a href="https://openweathermap.org/" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img/logo_white_cropped.png') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Get weather and weather forecasts for multiple cities.</p>

            <form class="" id="weatherPOST" action="{{ route('fetch.weather') }}">
              <div class="row">
                <fieldset class="form-group col-12">
                  <label for="city"><b>City</b></label>
                  <input type="text" name="city" class="form-control" placeholder="London, UK">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="latitude"><b>Latitude</b></label>
                  <input type="number" name="latitude" class="form-control" step="0.01" placeholder="51.51">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="longitude"><b>Longitude</b></label>
                  <input type="number" name="longitude" class="form-control" step="0.01" placeholder="-0.13">
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="weatherBlock" class="justify-content-between response-block" style="display: none;">
                <h4 id="weatherResult" class="col-md-4 align-self-center"></h4>
                <img id="weatherIcon" class="col-md-4 align-self-center" src="" alt="">
                <h3 id="weatherRate" class="col-md-4 align-self-center"></h3>
              </div>
            </div>

            <fieldset class="form-group">
              <textarea id="weatherReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://openweathermap.org/" class="text-white" target="_blank">Datas provider: <b>openweathermap.org</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/google-maps-t.jpg') }}')">

          <div class="card-header">
            <h5 class="card-title">Map API</h5>
            <a href="https://openstreetmap.org/" target="_blank">
              <img class="card-icon" src="{{ asset('storage/img/osm_logo.svg') }}" alt="">
            </a>
          </div>
          <div class="card-body">
            <h5 class="">API description</h5>
            <p class="card-text">Interactive maps based on data by OpenStreetMap contributors.</p>

            <form class="" id="mapPOST" action="{{ route('fetch.map') }}">
              <div class="row">
                <fieldset class="form-group col-6">
                  <label for="number"><b>Street number</b></label>
                  <input type="number" name="number" class="form-control" placeholder="55">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="street"><b>Street</b></label>
                  <input type="text" name="street" class="form-control" placeholder="5th Avenue">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="city"><b>City *</b></label>
                  <input type="text" name="city" class="form-control" placeholder="New York">
                </fieldset>
                <fieldset class="form-group col-6">
                  <label for="country"><b>Country</b></label>
                  <input type="text" name="country" class="form-control" placeholder="United States">
                </fieldset>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="my-2">
              <div id="mapBlock" class="d-none justify-content-between">
                <!-- Map will be displayed here -->
              </div>
            </div>

            <fieldset class="form-group">
              <textarea id="mapReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
            </fieldset>

          </div>
          <div class="card-footer">
            <a href="https://openstreetmap.org/" class="text-white" target="_blank">Datas provider: <b>openstreetmap.org</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Javascript Leaflet for opentstreetmap -->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

@endsection
