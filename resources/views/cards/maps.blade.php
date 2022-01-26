<div class="col-md-6 col-xl-4" id="map">
  <form action="{{ route('maps.fetch') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/google-maps-t.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Map API</h5>
      <a href="https://openstreetmap.org/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/osm_logo.svg') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Interactive maps based on data by OpenStreetMap contributors.</p>

        <div class="row">
          <fieldset class="form-group col-6">
            <label><b>Street number</b></label>
            <input type="number" name="number" class="form-control" placeholder="55">
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>Street</b></label>
            <input type="text" name="street" class="form-control" placeholder="5th Avenue">
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>City *</b></label>
            <input type="text" name="city" class="form-control" placeholder="New York">
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>Country</b></label>
            <input type="text" name="country" class="form-control" placeholder="United States">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div id="mapBlock" class="response-block d-none justify-content-between">
          <!-- Map will be displayed here -->
        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://openstreetmap.org/" class="text-white" target="_blank">Datas provider: <b>openstreetmap.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
