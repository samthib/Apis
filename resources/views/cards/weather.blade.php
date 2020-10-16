<div class="col-md-6 col-xl-4" id="weather">
  <form action="{{ route('fetch.weather') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/ciel_soleil_peu_nuageux.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Weather API</h5>
      <a href="https://openweathermap.org/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/logo_white_cropped.png') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Get weather and weather forecasts for multiple cities.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>City</b></label>
            <input id="city" type="text" name="city" class="form-control" placeholder="London, UK">
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>Latitude</b></label>
            <input id="latitude" type="number" name="latitude" class="form-control" step="0.01" placeholder="51.51">
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>Longitude</b></label>
            <input id="longitude" type="number" name="longitude" class="form-control" step="0.01" placeholder="-0.13">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block row m-0 align-items-center" style="display: none;">
          <h4 class="response-result col-md-4"></h4>
          <img class="response-icon col-md-4">
          <h3 class="response-rate col-md-4"></h3>
        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://openweathermap.org/" class="text-white" target="_blank">Datas provider: <b>openweathermap.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
