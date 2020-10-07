<div class="col-md-6 col-xl-4">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/words1.jpg') }}');">
    <div class="card-header">
      <h5 class="card-title">Instant Answer API</h5>
      <a href="https://duckduckgo.com/api" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/duckduckgo-logo.svg') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Topic summaries, categories, official sites, places, people, definitions and more ...</p>

      <form class="" id="searchPOST" action="{{ route('fetch.search') }}">
        <div class="row">
          <fieldset class="form-group col-12">
            <label for="search"><b>Search</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>

      <div class="my-2">
        <div id="searchBlock" class="justify-content-between response-block" style="display: none;">
          <div class="col-12 text-left">
            <div class="d-flex flex-wrap justify-content-between mx-0">
              <h4 id="searchTitle" class="mb-1"></h4>
              <img class="" id="searchIcon" src="" alt="" height="40px">
            </div>
            <small><a href="" id="searchUrl"></a></small>
            <div class="my-4">
              <p class="my-0" id="searchAbstract"></p>
              <a href="" id="searchAbstractUrl"></a>
            </div>

            <ul class="list-group list-unstyled list-group-horizontal-sm">
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-1" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-2" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-3" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-4" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-5" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
              <li class="mr-2 text-center">
                <a id="searchLinkIcon-6" href="">
                  <img src="" alt="" height="30px">
                  <p><small></small></p>
                </a>
              </li>
            </ul>

          </div>

        </div>
      </div>

      <pre><code id="searchReponse" class="json response border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://duckduckgo.com/api" class="text-white" target="_blank">Datas provider: <b>duckduckgo.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
