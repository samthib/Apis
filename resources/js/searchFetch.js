const search = document.querySelector('#search');

search.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var title = this.querySelector('.response-title');
  var description = this.querySelector('.response-description');
  var descriptionLink = this.querySelector('.response-description-link');
  var icon = this.querySelector('.response-icon');
  var link = this.querySelector('.response-link');
  var linkIcon = [];
  for (var i = 1; i < 7; i++) {
    linkIcon[i] = this.querySelector('.response-link-icon-'+i);
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
      title.innerHTML = data.Heading;
      icon.src = data.Image;
      link.innerHTML = typeof data.Results[0] !== 'undefined' ? data.Results[0].Text : '';
      link.href = typeof data.Results[0] !== 'undefined' ? data.Results[0].FirstURL : '';
      description.innerHTML = data.AbstractText;
      descriptionLink.href = data.AbstractURL;
      descriptionLink.innerHTML = data.AbstractSource;


      for (var i = 1; i < 7; i++) {
        linkIcon[i].href = "";
        linkIcon[i].children[0].src = "";
        linkIcon[i].children[0].children[0] = "";
      }

      data.Infobox.content.forEach((item, i) => {
        if (item.data_type == 'wikipedia_profile') {
          linkIcon[1].href = "https://wikipedia.com/"+item.value;
          linkIcon[1].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/wikipedia.svg';
          linkIcon[1].children[0].children[0] = 'Wikipedia';
        }
        if (item.data_type == 'github_profile') {
          linkIcon[2].href = "https://github.com/"+item.value;
          linkIcon[2].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/github.svg';
          linkIcon[2].children[0].children[0] = 'GitHub';
        }
        if (item.data_type == 'twitter_profile') {
          linkIcon[3].href = "https://twitter.com/"+item.value;
          linkIcon[3].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/twitter.svg';
          linkIcon[3].children[0].children[0] = 'twitter';
        }
        if (item.data_type == 'instagram_profile') {
          linkIcon[4].href = "https://instagram.com/"+item.value;
          linkIcon[4].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/instagram.svg';
          linkIcon[4].children[0].children[0] = 'Instagram';
        }
        if (item.data_type == 'facebook_profile') {
          linkIcon[5].href = "https://facebook.com/"+item.value;
          linkIcon[5].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/facebook.svg';
          linkIcon[5].children[0].children[0] = 'Facebook';
        }
        if (item.data_type == 'youtube_channel') {
          linkIcon[6].href = "https://youtube.com/"+item.value;
          linkIcon[6].children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/youtube.svg';
          linkIcon[6].children[0].children[0] = 'Youtube';
        }
      });
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
