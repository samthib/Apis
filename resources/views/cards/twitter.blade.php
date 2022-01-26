<div class="col-md-6 col-xl-4" id="twitter">
  <form action="{{ route('twitter.fetch') }}">
    <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/Twitter.jpg') }}')">

      <div class="card-header">
        <h5 class="card-title">Twitter API</h5>
        <a href="https://twitter.com/" target="_blank">
          <img class="card-icon" src="{{ asset('storage/img/Twitter_Logo_Blue.png') }}">
        </a>
      </div>
      <div class="card-body">
        <h5>API description</h5>
        <p class="card-text">Get the latest tweet from an user.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>Username</b></label>
            <input type="text" name="search" class="form-control" placeholder="Twitter username">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

        <div class="my-2">
          <div class="response-block row m-0" style="display: none;">
            <div class="col-12 text-left">
              <div class="d-flex flex-wrap justify-content-between mx-0">
                <h4 class="mb-1">
                  <span class="response-title"></span>
                  <span><i class="response-verified fa fa-check-circle" aria-hidden="true" style="display: none;"></i></span>
                </h4>
                <img class="response-icon" height="40">
              </div>
              <h6 class="response-username mb-1 text-secondary"></h6>
              <small><a href="" class="response-link"></a></small>
              <div class="my-4">
                <p class="response-description"></p>
                <div class="d-flex flex-wrap justify-content-around mx-0">
                  <p><b><span class="response-followers"></span></b><span class="text-secondary"> Followers</span></p>
                  <p><b><span class="response-following"></span></b><span class="text-secondary"> Following</span></p>
                </div>
                <hr>
                <p class="text-secondary"><b>Pined tweet  </b><i class="fa fa-thumb-tack" aria-hidden="true"></i></p>
                <p class="response-result my-2"></p>
              </div>
            </div>

          </div>
        </div>

        <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

      </div>
      <div class="card-footer">
        <a href="https://twitter.com/" class="text-white" target="_blank">Datas provider: <b>twitter.com</b>
          <i class="fa fa-external-link" aria-hidden="true"></i>
        </a>
      </div>


    </div>
  </form>
</div>
