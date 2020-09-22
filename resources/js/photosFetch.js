const photosPOST = document.getElementById('photosPOST');
var photosBlock = document.getElementById('photosBlock');
var photosReponse = document.getElementById('photosReponse');
var photosImage = [];
var photosTitle = [];
for (var i = 1; i < 13; i++) {
  photosImage[i] = document.getElementById('photosImage-'+i);
  photosTitle[i] = document.getElementById('photosTitle-'+i);
}
const token = document.querySelector('meta[name="csrf-token"]').content;


photosPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(photosPOST);

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

    photosReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      photosBlock.style.display = "flex";

      data.photos.photo.forEach((item, i) => {
        photosImage[i+1].src = typeof item.id !== 'undefined' ? 'https://farm'+item.farm+'.staticflickr.com/'+item.server+'/'+item.id+'_'+item.secret+'_n.jpg' : '';
        photosTitle[i+1].innerHTML = typeof item.id !== 'undefined' ? item.title : '';
      });
    }
  })
  .catch(err => {
    console.log(err);
  });
});
