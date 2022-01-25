const youtube = document.querySelector('#youtube');

if (youtube) {
  youtube.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var frame = [];
  for (var i = 1; i < 13; i++) {
    frame[i] = this.querySelector('.response-frame-'+i);
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

      data.items.forEach((item, i) => {
        frame[i+1].src = typeof item.id.videoId !== 'undefined' ? 'https://www.youtube.com/embed/'+item.id.videoId : '';
      });
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
}
