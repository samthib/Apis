const business = document.querySelector('#business');

business.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var title = [];
  var image = [];
  var description = [];
  var rate = [];
  for (var i = 1; i < 13; i++) {
    title[i] = this.querySelector('.response-title-'+i);
    image[i] = this.querySelector('.response-image-'+i);
    description[i] = this.querySelector('.response-description-'+i);
    rate[i] = this.querySelector('.response-rate-'+i);
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

      data.businesses.forEach((item, i) => {
        image[i+1].src = typeof item.id !== 'undefined' ? item.image_url : '';
        title[i+1].innerHTML = typeof item.id !== 'undefined' ? item.name : '';
        description[i+1].innerHTML = typeof item.id !== 'undefined' ? item.location.display_address.[0]+'<br>'+item.location.display_address.[1]+'<br>'+item.location.display_address.[2]+'<br>' : '';
        rate[i+1].innerHTML = typeof item.id !== 'undefined' ? item.rating : '';
      });
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
