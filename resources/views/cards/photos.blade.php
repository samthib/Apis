<div class="col-md-6 col-xl-4">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/black-and-white-camera.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Photos API</h5>
      <a href="https://flickr.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/Flickr.png') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Search a list of photos and pictures from Flickr famous website.</p>

      <form class="" id="photosPOST" action="{{ route('fetch.photos') }}">
        <div class="row">
          <fieldset class="form-group col-12">
            <label for="search"><b>Search videos</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your photos search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>

      <div class="my-2">
        <div id="photosBlock" class="flex-column justify-content-between" style="display: none;">

          <div id="carouselPhotosControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img id="photosImage-1" class="w-100 rounded" src="" alt="">
                <h4 id="photosTitle-1"></h4>
              </div>
              @for ($i=2; $i < 13; $i++)
                <div class="carousel-item">
                  <img id="photosImage-{{$i}}" class="w-100 rounded" src="" alt="">
                  <h4 id="photosTitle-{{$i}}"></h4>
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

      <fieldset class="form-group">
        <textarea id="photosReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
      </fieldset>

    </div>

    <div class="card-footer">
      <a href="https://flickr.com/" class="text-white" target="_blank">Datas provider: <b>flickr.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
