const verifyPOST = document.getElementById('verifyPOST');
var verifyBlock = document.getElementById('verifyBlock');
var verifyReponse = document.getElementById('verifyReponse');
var verifyResult = document.getElementById('verifyResult');
var verifyPhone = document.getElementById('verifyPhone');
var verifyCode = document.getElementById('verifyCode');
var verify_request_id = document.getElementById('request_id');
const token = document.querySelector('meta[name="csrf-token"]').content;


verifyPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(verifyPOST);

  fetch(url, {
    method: "POST",
    headers: {
      'Accept': 'application/json',
      "X-CSRF-TOKEN": token
    },
    body: postData,
  })
  .then(response =>
    response.json()
  )
  .then(data => {
    console.log(data);
    verifyReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status == 0) {
      if (typeof data.event_id !== 'undefined') {
        verifyResult.innerHTML = "<span class='text-success'>Verified &#10004;</span>"
      } else {
        verifyCode.readOnly = false;
        verifyCode.focus();
        verify_request_id.value = data.request_id;

        verifyBlock.style.display = "flex";
        verifyResult.innerHTML = "<span class='text-warning'>Enter your code &#10034;&#10034;&#10034;&#10034;</span>"
      }
    } else {
      verifyResult.innerHTML = "<span class='text-danger'>Error &#10008;</span>"
    }
  })
  .catch(err => {
    console.log(err);
  });
});
