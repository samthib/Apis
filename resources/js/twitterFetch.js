const twitter = document.querySelector('#twitter');

twitter.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var title = this.querySelector('.response-title');
  var username = this.querySelector('.response-username');
  var verified = this.querySelector('.response-verified');
  var description = this.querySelector('.response-description');
  var result = this.querySelector('.response-result');
  var icon = this.querySelector('.response-icon');
  var link = this.querySelector('.response-link');
  var followers = this.querySelector('.response-followers');
  var following = this.querySelector('.response-following');

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
      result.innerHTML = typeof data.includes !== 'undefined' ? data.includes.tweets[0].text : '';
      description.innerHTML = data.data.description;
      title.innerHTML = data.data.name;
      username.innerHTML = '@'+data.data.username;
      icon.src = data.data.profile_image_url;
      verified.style.display = data.data.verified ? "inline-block" : "none";
      link.innerHTML = typeof data.data.entities !== 'undefined' ? data.data.entities.url.urls[0].display_url : '';
      link.href = typeof data.data.entities !== 'undefined' ? data.data.entities.url.urls[0].expanded_url : '';
      followers.innerHTML = data.data.public_metrics.followers_count;
      following.innerHTML = data.data.public_metrics.following_count;
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
