<div class="col-md-6 col-xl-4">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/computer-safety.jpg') }}');">
    <div class="card-header">
      <h5 class="card-title">Phone verification API</h5>
      <a href="https://www.vonage.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/VonageLogo.svg') }}" alt="">
      </a>
    </div>
    <div class="card-body">
      <h5 class="">API description</h5>
      <p class="card-text">Implement a "two-factor authentication" by phone in an applications.</p>

      <form class="" id="verifyPOST" action="{{ route('fetch.verify') }}">
        <div class="row">
          <fieldset class="form-group col-12">
            <label for="verifyPhone"><b>Phone number</b></label>
            <input type="text" name="verifyPhone" class="form-control" placeholder="+33 612345678">
          </fieldset>
          <fieldset class="form-group col-12">
            <label for="verifyCode"><b>Verification code</b></label>
            <input id="request_id" type="hidden" name="request_id" value="">
            <input id="verifyCode" type="number" name="verifyCode" class="form-control" placeholder="1234" readonly>
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>

      <div class="my-2">
        <div id="verifyBlock" class="justify-content-between response-block" style="display: none;">
          <div class="col-12">
            <div class="text-center mx-0">
              <h5 id="verifyResult"></h5>
            </div>
          </div>
        </div>
      </div>

      <fieldset class="form-group">
        <textarea id="verifyReponse" class="response form-control" rows="5" placeholder="API Response" readonly></textarea>
      </fieldset>

    </div>
    <div class="card-footer">
      <a href="https://www.vonage.com/" class="text-white" target="_blank">Datas provider: <b>vonage.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
