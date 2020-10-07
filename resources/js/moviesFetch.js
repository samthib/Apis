const moviesPOST = document.getElementById('moviesPOST');
var moviesBlock = document.getElementById('moviesBlock');
var moviesReponse = document.getElementById('moviesReponse');
var moviesTitle = document.getElementById('moviesTitle');
var moviesPoster = document.getElementById('moviesPoster');
var moviesAbstract = document.getElementById('moviesAbstract');
var moviesDate = document.getElementById('moviesDate');
var moviesNote = document.getElementById('moviesNote');

const token = document.querySelector('meta[name="csrf-token"]').content;


moviesPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(moviesPOST);

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

    moviesReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      moviesBlock.style.display = "flex";
      moviesTitle.innerHTML = data.results.[0].title;
      moviesPoster.src = 'https://image.tmdb.org/t/p/w500/'+data.results.[0].poster_path;
      moviesAbstract.innerHTML = data.results.[0].overview;
      moviesDate.innerHTML = data.results.[0].release_date;
      moviesNote.innerHTML = data.results.[0].vote_average;
    }

    hljs.highlightBlock(moviesReponse);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
