<div class="col-md-6 col-xl-4" id="photos">
  <form action="{{ route('fetch.photos') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/black-and-white-camera.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Photos API</h5>
      <a href="https://flickr.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/Flickr.png') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Search a list of photos and pictures from Flickr famous website.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>Search videos</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your photos search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block flex-column justify-content-between" style="display: none;">

          <div id="carouselPhotosControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="response-image-1 w-100 rounded">
                <h4 class="response-title-1"></h4>
              </div>
              @for ($i=2; $i < 13; $i++)
                <div class="carousel-item">
                  <img class="response-image-{{$i}} w-100 rounded">
                  <h4 class="response-title-{{$i}}"></h4>
                </div>
              @endfor
            </div>

            <a class="carousel-control-prev" href="#carouselPhotosControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPhotosControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>

    <div class="card-footer">
      <a href="https://flickr.com/" class="text-white" target="_blank">Datas provider: <b>flickr.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
