<div class="col-md-6 col-xl-4">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/movies.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Movies Database API</h5>
      <a href="https://www.themoviedb.org/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/blue_square_tmdb.svg') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Search a movie from The Movie DB website.</p>

      <form class="" id="moviesPOST" action="{{ route('fetch.movies') }}">
        <div class="row">
          <fieldset class="form-group col-12">
            <label for="search"><b>Search movies</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your movies search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>

      <div class="my-2">
        <div id="moviesBlock" class="flex-column justify-content-between align-items-center response-block" style="display: none;">

          <h3 id="moviesTitle" class="px-2"></h3>
          <img class="w-100 h-auto rounded" id="moviesPoster" src="" alt="">
          <h4 class="px-2">Overview</h4>
          <p id="moviesAbstract" class="px-2"></p>
          <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
            <p>Release : <span id="moviesDate"></span></p>
            <h3>Note : <span id="moviesNote" class="text-info"></span></h3>
          </div>

        </div>
      </div>

      <fieldset class="form-group">
        <textarea id="moviesReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
      </fieldset>

    </div>

    <div class="card-footer">
      <a href="https://www.themoviedb.org/" class="text-white" target="_blank">Datas provider: <b>themoviedb.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
