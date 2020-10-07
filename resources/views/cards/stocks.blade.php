
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

            <pre><code id="stocksReponse" class="json response border rounded text-left">{"API" : "Response here"}</code></pre>

          </div>
          <div class="card-footer">
            <a href="https://finnhub.io/" class="text-white" target="_blank">Datas provider: <b>finnhub.io</b>
              <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
