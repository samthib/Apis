<div class="col-md-6 col-xl-4" id="news">
  <form action="{{ route('news.fetch') }}">
    <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/breaking-news.jpg') }}')">

      <div class="card-header">
        <h5 class="card-title">News API</h5>
        <a href="https://newsapi.org/" target="_blank">
          <img class="card-icon" src="{{ asset('storage/img/news.png') }}">
        </a>
      </div>
      <div class="card-body">
        <h5>API description</h5>
        <p class="card-text">Get the latest news on any topics.</p>

        <div class="row">
          <fieldset class="form-group col-6">
            <label><b>Category</b></label>
            <select class="form-control" name="category">
              <option value="general">general</option>
              <option value="business">business</option>
              <option value="entertainment">entertainment</option>
              <option value="health">health</option>
              <option value="science">science</option>
              <option value="sports">sports</option>
              <option value="technology">technology</option>
            </select>
          </fieldset>
          <fieldset class="form-group col-6">
            <label><b>Country</b></label>
            <select class="form-control" name="country">
              <option value="fr">France</option>
              <option value="it">Italy</option>
              <option value="es">Spain</option>
              <option value="br">Brazil</option>
              <option value="us">USA</option>
              <option value="ma">Morocco</option>
              <option value="de">Germany</option>
              <option value="jp">Japan</option>
              <option value="ru">Russia</option>
            </select>
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

        <div class="my-2">
          <div class="response-block flex-column justify-content-between align-items-center" style="display: none;">

            <div id="carouselNewsControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h3 class="response-title-0 px-2"></h3>
                  <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
                    <p><span class="response-author-0"></span></p>
                    <p><span class="response-date-0 text-primary"></span></p>
                  </div>
                  <img class="response-image-0 w-100 h-auto rounded">

                  <div class="col-12 text-left">
                    <small><a href="" class="response-link-0"></a></small>
                    <div class="my-4">
                      <p class="response-description-0 my-0"></p>
                      <a href="" class="response-description-link-0" target="_blank"></a>
                    </div>
                  </div>
                </div>

                @for ($i=1; $i < 12; $i++) <div class="carousel-item">
                  <h3 class="response-title-{{$i}} px-2"></h3>
                  <div class="w-100 d-flex flex-row justify-content-around align-items-baseline px-2">
                    <p><span class="response-author-{{$i}}"></span></p>
                    <p><span class="response-date-{{$i}} text-primary"></span></p>
                  </div>
                  <img class="response-image-{{$i}} w-100 h-auto rounded">

                  <div class="col-12 text-left">
                    <small><a href="" class="response-link-{{$i}}"></a></small>
                    <div class="my-4">
                      <p class="response-description-{{$i}} my-0"></p>
                      <a href="" class="response-description-link-{{$i}}" target="_blank"></a>
                    </div>
                  </div>
              </div>
              @endfor
            </div>

            <a class="carousel-control-prev" href="#carouselNewsControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselNewsControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>

    <div class="card-footer">
      <a href="https://newsapi.org/" class="text-white" target="_blank">Datas provider: <b>newsapi.org</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

</div>
</form>
</div>