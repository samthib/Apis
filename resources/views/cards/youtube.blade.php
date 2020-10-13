<div class="col-md-6 col-xl-4" id="youtube">
  <form action="{{ route('fetch.youtube') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/youtube.png') }}')">

    <div class="card-header">
      <h5 class="card-title">Youtube API</h5>
      <a href="https://youtube.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/logo-youtube.svg') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Search a list of videos from Youtube website.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label for="search"><b>Search videos</b></label>
            <input type="text" name="search" class="form-control" placeholder="Your youtube search ...">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block flex-column justify-content-between" style="display: none;">

          <div id="carouselYoutubeControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="response-frame-1 embed-responsive-item rounded-top" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="response-frame-2 embed-responsive-item rounded-bottom" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              @for ($i=3; $i < 13; $i+=2)
                <div class="carousel-item">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="response-frame-{{$i}} embed-responsive-item rounded-top" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="response-frame-{{$i+1}} embed-responsive-item rounded-bottom" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              @endfor
            </div>

            <a class="carousel-control-prev" href="#carouselYoutubeControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselYoutubeControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>

    <div class="card-footer">
      <a href="https://youtube.com/" class="text-white" target="_blank">Datas provider: <b>youtube.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
