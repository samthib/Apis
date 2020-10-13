<div class="col-md-6 col-xl-4" id="business">
  <form action="{{ route('fetch.business') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/skycrappers.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Business API</h5>
      <a href="https://yelp.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/yelp.png') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Search a list of business from Yelp famous website.</p>

        <div class="row">
          <fieldset class="form-group col-12">
           <label for="search"><b>Search business</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your business search ...">
          </fieldset>
          <fieldset class="form-group col-12">
            <label for="location"><b>Business location</b></label>
            <input type="text" name="location" class="form-control" placeholder="Business location ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block flex-column justify-content-between align-items-center" style="display: none;">

          <div id="carouselBusinessControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h3 class="response-title-1"></h3>
                <img class="response-image-1 w-100 rounded" src="" alt="">
                <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
                  <p>Adress : <span class="response-description-1"></span></p>
                  <h3>Note : <span class="response-rate-1 text-info"></span></h3>
                </div>
              </div>
              @for ($i=2; $i < 13; $i++)
                <div class="carousel-item">
                  <h3 class="response-title-{{$i}}"></h3>
                  <img class="response-image-{{$i}} w-100 rounded" src="" alt="">
                  <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
                    <p class="response-description-{{$i}}"></p>
                    <h3>Note : <span class="response-rate-{{$i}} text-info"></span></h3>
                  </div>
                </div>
              @endfor
            </div>

            <a class="carousel-control-prev" href="#carouselBusinessControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselBusinessControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>

    <div class="card-footer">
      <a href="https://yelp.com/" class="text-white" target="_blank">Datas provider: <b>yelp.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
