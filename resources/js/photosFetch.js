const photos = document.querySelector('#photos');

photos.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var title = [];
  var image = [];
  for (var i = 1; i < 13; i++) {
    title[i] = this.querySelector('.response-title-'+i);
    image[i] = this.querySelector('.response-image-'+i);
  }

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

      data.photos.photo.forEach((item, i) => {
        image[i+1].src = typeof item.id !== 'undefined' ? 'https://farm'+item.farm+'.staticflickr.com/'+item.server+'/'+item.id+'_'+item.secret+'_n.jpg' : '';
        title[i+1].innerHTML = typeof item.id !== 'undefined' ? item.title : '';
      });
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
