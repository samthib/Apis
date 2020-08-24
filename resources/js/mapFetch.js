const mapPOST = document.getElementById('mapPOST');
var mapBlock = document.getElementById('mapBlock');
var mapReponse = document.getElementById('mapReponse');
const token = document.querySelector('meta[name="csrf-token"]').content;


mapPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(mapPOST);

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
    mapReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      mapBlock.className = "d-flex";
      mapBlock.className = "response-block";
      mapBlock.style.height = "300px";
      initMap(data[0].lat, data[0].lon);
    } else {
      mapBlock.className = "d-none";
      mapBlock.style.height = "0px";
    }
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
