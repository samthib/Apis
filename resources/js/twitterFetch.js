const twitterPOST = document.getElementById('twitterPOST');
var twitterBlock = document.getElementById('twitterBlock');
var twitterReponse = document.getElementById('twitterReponse');
var twitterTitle = document.getElementById('twitterTitle');
var twitterUsername = document.getElementById('twitterUsername');
var twitterVerified = document.getElementById('twitterVerified');
var twitterDescription = document.getElementById('twitterDescription');
var twitterResult = document.getElementById('twitterResult');
var twitterIcon = document.getElementById('twitterIcon');
var twitterUrl = document.getElementById('twitterUrl');
var twitterFollowers = document.getElementById('twitterFollowers');
var twitterFollowing = document.getElementById('twitterFollowing');
const token = document.querySelector('meta[name="csrf-token"]').content;


twitterPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(twitterPOST);

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
    twitterReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      twitterBlock.style.display = "flex";
      twitterResult.innerHTML = typeof data.includes !== 'undefined' ? data.includes.tweets[0].text : '';
      twitterDescription.innerHTML = data.data.description;
      twitterTitle.innerHTML = data.data.name;
      twitterUsername.innerHTML = '@'+data.data.username;
      twitterIcon.src = data.data.profile_image_url;
      twitterVerified.style.display = data.data.verified ? "inline-block" : "none";
      twitterUrl.innerHTML = typeof data.data.entities !== 'undefined' ? data.data.entities.url.urls[0].display_url : '';
      twitterUrl.href = typeof data.data.entities !== 'undefined' ? data.data.entities.url.urls[0].expanded_url : '';
      twitterFollowers.innerHTML = data.data.public_metrics.followers_count;
      twitterFollowing.innerHTML = data.data.public_metrics.following_count;
    }
    
    hljs.highlightBlock(twitterReponse);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
