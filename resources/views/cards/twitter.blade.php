<div class="col-md-6 col-xl-4">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/twitter.jpg') }}')">

    <div class="card-header">
      <h5 class="card-title">Twitter API</h5>
      <a href="https://twitter.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/Twitter_Logo_Blue.png') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Get the latest tweet from an user.</p>

      <form class="" id="twitterPOST" action="{{ route('fetch.twitter') }}">
        <div class="row">
          <fieldset class="form-group col-12">
            <label for="search"><b>Username</b></label>
            <input type="text" name="search" class="form-control" placeholder="Twitter username">
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>

      <div class="my-2">
        <div id="twitterBlock" class="justify-content-between response-block" style="display: none;">
        <div class="col-12 text-left">
          <div class="d-flex flex-wrap justify-content-between mx-0">
            <h4 class="mb-1">
              <span id="twitterTitle"></span>
              <span><i id="twitterVerified" class="fa fa-check-circle" aria-hidden="true" style="display: none;"></i></span>
            </h4>
            <img class="" id="twitterIcon" src="" alt="" height="40px">
          </div>
          <h6 id="twitterUsername" class="mb-1 text-secondary"></h6>
          <small><a href="" id="twitterUrl"></a></small>
          <div class="my-4">
            <p id="twitterDescription"></p>
            <div class="d-flex flex-wrap justify-content-around mx-0">
              <p><b><span id="twitterFollowers"></span></b><span class="text-secondary"> Followers</span></p>
              <p><b><span id="twitterFollowing"></span></b><span class="text-secondary"> Following</span></p>
            </div>
            <hr>
            <p class="text-secondary"><b>Pined tweet  </b><i class="fa fa-thumb-tack" aria-hidden="true"></i></p>
            <p class="my-2" id="twitterResult"></p>
          </div>
        </div>

        </div>
      </div>

      <fieldset class="form-group">
        <textarea id="twitterReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
      </fieldset>

    </div>
    <div class="card-footer">
      <a href="https://twitter.com/" class="text-white" target="_blank">Datas provider: <b>twitter.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
