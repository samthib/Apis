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

      <pre><code id="weatherReponse" class="json response border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://openweathermap.org/" class="text-white" target="_blank">Datas provider: <b>openweathermap.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
