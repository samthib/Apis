const movie = document.querySelector('#movie');

movie.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var title = this.querySelector('.response-title');
  var image = this.querySelector('.response-image');
  var description = this.querySelector('.response-description');
  var date = this.querySelector('.response-date');
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
      title.innerHTML = data.results.[0].title;
      image.src = 'https://image.tmdb.org/t/p/w500/'+data.results.[0].poster_path;
      description.innerHTML = data.results.[0].overview;
      date.innerHTML = data.results.[0].release_date;
      rate.innerHTML = data.results.[0].vote_average;
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
