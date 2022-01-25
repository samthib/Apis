const map = document.querySelector('#map');

if (map) {
  map.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');

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
      block.className = "d-flex";
      block.className = "response-block";
      block.style.height = "300px";
      initMap(data[0].lat, data[0].lon);
    } else {
      block.className = "d-none";
      block.style.height = "0px";
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});



// Initialised out of function to remove correctly if new map
var myMap = null;

// Function to initialise the Map
function initMap(lat, lon) {

  if (myMap != null) {
    myMap.off();
    myMap.remove();
  }

  myMap = L.map('mapBlock').setView([lat, lon], 11);
  // Server for the map (tiles) openstreetmap.fr
  L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Data source
    attribution: 'datas © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
  }).addTo(myMap);

  // Marker
  var marker = L.marker([lat, lon]).addTo(myMap);
}
}