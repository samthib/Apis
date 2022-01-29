<div class="col-md-6 col-xl-4" id="search">
  <form action="{{ route('searches.fetch') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/words1.jpg') }}');">

    <div class="card-header">
      <h5 class="card-title">Instant Answer API</h5>
      <a href="https://duckduckgo.com/api" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/duckduckgo-logo.svg') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Topic summaries, categories, official sites, places, people, definitions and more ...</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>Search</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block justify-content-between" style="display: none;">

          <div class="col-12 text-left">
            <div class="d-flex flex-wrap justify-content-between mx-0">
              <h4 class="response-title mb-1"></h4>
              <img class="response-icon" height="40">
            </div>
            <small><a href="" class="response-link"></a></small>
            <div class="my-4">
              <p class="response-description my-0"></p>
              <a href="" class="response-description-link"></a>
            </div>

            <ul class="list-group list-unstyled list-group-horizontal">
              @for ($i=1; $i < 7; $i++)
                <li class="mr-2 text-center">
                  <a class="response-link-icon-{{ $i }}" href="">
                    <img height="30">
                    <p><small></small></p>
                  </a>
                </li>
              @endfor
            </ul>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://duckduckgo.com/api" class="text-white" target="_blank">Datas provider: <b>duckduckgo.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
