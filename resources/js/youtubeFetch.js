const youtubePOST = document.getElementById('youtubePOST');
var youtubeBlock = document.getElementById('youtubeBlock');
var youtubeReponse = document.getElementById('youtubeReponse');
var youtubeFrame = [];
for (var i = 1; i < 13; i++) {
  youtubeFrame[i] = document.getElementById('youtubeFrame-'+i);
}
const token = document.querySelector('meta[name="csrf-token"]').content;


youtubePOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(youtubePOST);

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

    youtubeReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      youtubeBlock.style.display = "flex";

      data.items.forEach((item, i) => {
        youtubeFrame[(i+1)].src = typeof item.id.videoId !== 'undefined' ? 'https://www.youtube.com/embed/'+item.id.videoId : '';
      });

    }
  })
  .catch(err => {
    console.log(err);
  });
});
