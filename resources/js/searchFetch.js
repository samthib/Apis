const searchPOST = document.getElementById('searchPOST');
var searchBlock = document.getElementById('searchBlock');
var searchReponse = document.getElementById('searchReponse');
var searchTitle = document.getElementById('searchTitle');
var searchAbstract = document.getElementById('searchAbstract');
var searchAbstractUrl = document.getElementById('searchAbstractUrl');
var searchIcon = document.getElementById('searchIcon');
var searchUrl = document.getElementById('searchUrl');
var searchLinkIcon1 = document.getElementById('searchLinkIcon-1');
var searchLinkIcon2 = document.getElementById('searchLinkIcon-2');
var searchLinkIcon3 = document.getElementById('searchLinkIcon-3');
var searchLinkIcon4 = document.getElementById('searchLinkIcon-4');
var searchLinkIcon5 = document.getElementById('searchLinkIcon-5');
var searchLinkIcon6 = document.getElementById('searchLinkIcon-6');
const token = document.querySelector('meta[name="csrf-token"]').content;


searchPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(searchPOST);

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

    searchReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      searchBlock.style.display = "flex";
      searchTitle.innerHTML = data.Heading;
      searchIcon.src = data.Image;
      searchUrl.innerHTML = typeof data.Results[0] !== 'undefined' ? data.Results[0].Text : '';
      searchUrl.href = typeof data.Results[0] !== 'undefined' ? data.Results[0].FirstURL : '';
      searchAbstract.innerHTML = data.AbstractText;
      searchAbstractUrl.href = data.AbstractURL;
      searchAbstractUrl.innerHTML = data.AbstractSource;

      searchLinkIcon1.href = "";
      searchLinkIcon1.children[0].src = "";
      searchLinkIcon1.children[0].children[0] = "";
      searchLinkIcon2.href = "";
      searchLinkIcon2.children[0].src = "";
      searchLinkIcon2.children[0].children[0] = "";
      searchLinkIcon3.href = "";
      searchLinkIcon3.children[0].src = "";
      searchLinkIcon3.children[0].children[0] = "";
      searchLinkIcon4.href = "";
      searchLinkIcon4.children[0].src = "";
      searchLinkIcon4.children[0].children[0] = "";
      searchLinkIcon5.href = "";
      searchLinkIcon5.children[0].src = "";
      searchLinkIcon5.children[0].children[0] = "";
      searchLinkIcon6.href = "";
      searchLinkIcon6.children[0].src = "";
      searchLinkIcon6.children[0].children[0] = "";

      data.Infobox.content.forEach((item, i) => {
        if (item.data_type == 'wikipedia_profile') {
          searchLinkIcon1.href = "https://wikipedia.com/"+item.value;
          searchLinkIcon1.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/wikipedia.svg';
          searchLinkIcon1.children[0].children[0] = 'Wikipedia';
        }
        if (item.data_type == 'github_profile') {
          searchLinkIcon2.href = "https://github.com/"+item.value;
          searchLinkIcon2.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/github.svg';
          searchLinkIcon2.children[0].children[0] = 'GitHub';
        }
        if (item.data_type == 'twitter_profile') {
          searchLinkIcon3.href = "https://twitter.com/"+item.value;
          searchLinkIcon3.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/twitter.svg';
          searchLinkIcon3.children[0].children[0] = 'twitter';
        }
        if (item.data_type == 'instagram_profile') {
          searchLinkIcon4.href = "https://instagram.com/"+item.value;
          searchLinkIcon4.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/instagram.svg';
          searchLinkIcon4.children[0].children[0] = 'Instagram';
        }
        if (item.data_type == 'facebook_profile') {
          searchLinkIcon5.href = "https://facebook.com/"+item.value;
          searchLinkIcon5.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/facebook.svg';
          searchLinkIcon5.children[0].children[0] = 'Facebook';
        }
        if (item.data_type == 'youtube_channel') {
          searchLinkIcon6.href = "https://youtube.com/"+item.value;
          searchLinkIcon6.children[0].src = 'https://duckduckgo.com/assets/icons/thirdparty/youtube.svg';
          searchLinkIcon6.children[0].children[0] = 'Youtube';
        }
      });
    }

    hljs.highlightBlock(searchReponse);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
