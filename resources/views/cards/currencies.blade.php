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
