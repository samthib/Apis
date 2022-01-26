<div class="col-md-6 col-xl-4" id="verify">
  <form action="{{ route('verify.fetch') }}">
  <div class="card m-1 m-md-4" style="background-image: url('{{ asset('storage/img/computer-safety.jpg') }}');">

    <div class="card-header">
      <h5 class="card-title">Phone verification API</h5>
      <a href="https://www.vonage.com/" target="_blank">
        <img class="card-icon" src="{{ asset('storage/img/VonageLogo.svg') }}">
      </a>
    </div>
    <div class="card-body">
      <h5>API description</h5>
      <p class="card-text">Implement a "two-factor authentication" by phone in an applications.</p>

        <div class="row">
          <fieldset class="form-group col-12">
            <label><b>Phone number</b></label>
            <input id="phone" type="text" name="phone" class="form-control" placeholder="+33 612345678">
          </fieldset>
          <fieldset class="form-group col-12">
            <label><b>Verification code</b></label>
            <input id="request_id" type="hidden" name="request_id" value="">
            <input id="code" type="number" name="code" class="form-control" placeholder="1234" readonly>
          </fieldset>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

      <div class="my-2">
        <div class="response-block justify-content-between" style="display: none;">
          <div class="col-12">
            <div class="text-center mx-0">
              <h5 class="response-result"></h5>
            </div>
          </div>
        </div>
      </div>

      <pre><code class="response-json json border rounded text-left">{"API" : "Response here"}</code></pre>

    </div>
    <div class="card-footer">
      <a href="https://www.vonage.com/" class="text-white" target="_blank">Datas provider: <b>vonage.com</b>
        <i class="fa fa-external-link" aria-hidden="true"></i>
      </a>
    </div>

  </div>
</form>
</div>
