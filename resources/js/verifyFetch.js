const verify = document.querySelector('#verify');

verify.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var result = this.querySelector('.response-result');
  var code = this.querySelector('#code');
  var request_id = this.querySelector('#request_id');

  const url = this.getAttribute('action');
  postData = new FormData(this);

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
    json.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status == 0) {
      if (typeof data.event_id !== 'undefined') {
        result.innerHTML = "<span class='text-success'>Verified &#10004;</span>"
      } else {
        code.readOnly = false;
        code.focus();
        request_id.value = data.request_id;

        block.style.display = "flex";
        result.innerHTML = "<span class='text-warning'>Enter your code &#10034;&#10034;&#10034;&#10034;</span>"
      }
    } else {
      result.innerHTML = "<span class='text-danger'>Error &#10008;</span>"
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
