<div class="col-md-6 col-xl-4" id="stocks">
  <form action="{{ route('fetch.stocks') }}">
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

        <div class="row">
          <fieldset class="form-group col-12">
            <label for="stock"><b>Stock symbol (US market)</b></label>
            <input type="text" name="stock" class="form-control" placeholder="AAPL">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

        <div class="my-2">
          <div class="response-block row m-0" style="display: none;">
            <ul class="col-4 list-unstyled text-left px-2">
              <li><small class="text-success">Height: <span class="response-height text-white"></span></small></li>
              <li><small class="text-primary">Close: <span class="response-close text-white"></span></small></li>
              <li><small class="text-primary">Open: <span class="response-open text-white"></span></small></li>
              <li><small class="text-danger">Low: <span class="response-low text-white"></span></small></li>
            </ul>
            <div class="col-8">
              <div class="d-flex justify-content-between mx-0">
                <h5 class="response-symbol"></h5>
                <h5 class="response-rate"></h5>
              </div>
              <h3 class="response-result text-center mt-2"></h3>
              <small class="response-date text-center"></small>
            </div>
          </div>
        </div>

        <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

      </div>
      <div class="card-footer">
        <a href="https://finnhub.io/" class="text-white" target="_blank">Datas provider: <b>finnhub.io</b>
          <i class="fa fa-external-link" aria-hidden="true"></i>
        </a>
      </div>

    </div>
  </form>
</div>
