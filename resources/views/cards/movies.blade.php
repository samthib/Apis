<div class="col-md-6 col-xl-4" id="movie">
  <form action="{{ route('movies.fetch') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/movies.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Movies Database API</h5>
      <a href="https://www.themoviedb.org/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/blue_square_tmdb.svg') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Search a movie from The Movie DB website.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>Search movies</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your movies search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block flex-column justify-content-between align-items-center" style="display: none;">

          <h3 class="response-title px-2"></h3>
          <img class="response-image w-100 h-auto rounded">
          <h4 class="px-2">Overview</h4>
          <p class="response-description px-2"></p>
          <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
            <p>Release : <span class="response-date"></span></p>
            <h3>Note : <span class="response-rate text-info"></span></h3>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>

    <div class="card-footer">
      <a href="https://www.themoviedb.org/" class="text-white" target="_blank">Datas provider: <b>themoviedb.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
