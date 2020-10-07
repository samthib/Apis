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

      <pre><code id="mapReponse" class="json response border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://openstreetmap.org/" class="text-white" target="_blank">Datas provider: <b>openstreetmap.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
