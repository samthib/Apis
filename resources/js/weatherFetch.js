const weatherPOST = document.getElementById('weatherPOST');
var weatherBlock = document.getElementById('weatherBlock');
var weatherReponse = document.getElementById('weatherReponse');
var weatherRate = document.getElementById('weatherRate');
var weatherResult = document.getElementById('weatherResult');
var weatherIcon = document.getElementById('weatherIcon');
const token = document.querySelector('meta[name="csrf-token"]').content;


weatherPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(weatherPOST);

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
    weatherReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      weatherBlock.style.display = "flex";
      weatherResult.innerHTML = data.weather[0].description;
      weatherIcon.src = "http://openweathermap.org/img/wn/"+data.weather[0].icon+"@2x.png";
      weatherRate.innerHTML = "<b>"+data.main.temp+"&#8451;</b>";
    }
  })
  .catch(err => {
    console.log(err);
  });
});
