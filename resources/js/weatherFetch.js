const weather = document.querySelector('#weather');

weather.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var result = this.querySelector('.response-result');
  var icon = this.querySelector('.response-icon');
  var rate = this.querySelector('.response-rate');

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

    if (data.status != 'FAIL') {
      block.style.display = "flex";
      result.innerHTML = data.weather[0].description;
      icon.src = "http://openweathermap.org/img/wn/"+data.weather[0].icon+"@2x.png";
      rate.innerHTML = "<b>"+data.main.temp+"&#8451;</b>";
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
