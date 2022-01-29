const news = document.querySelector('#news');

if (news) {
  news.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();

    const token = document.querySelector('meta[name="csrf-token"]').content;
    var block = this.querySelector('.response-block');
    var json = this.querySelector('.response-json');
    var title = [];
    var image = [];
    var author = [];
    var date = [];
    var description = [];
    var descriptionLink = [];
    for (var i = 0; i < 12; i++) {
      title[i] = this.querySelector('.response-title-' + i);
      image[i] = this.querySelector('.response-image-' + i);
      author[i] = this.querySelector('.response-author-' + i);
      date[i] = this.querySelector('.response-date-' + i);
      description[i] = this.querySelector('.response-description-' + i);
      descriptionLink[i] = this.querySelector('.response-description-link-' + i);
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

          data.articles.forEach((item, i) => {
            title[i].innerHTML = item.title;
            author[i].innerHTML = item.author;
            const d = new Date(item.publishedAt);
            date[i].innerHTML = d.toDateString();
            image[i].src = item.urlToImage;
            description[i].innerHTML = item.description;
            descriptionLink[i].href = item.url;
            descriptionLink[i].innerHTML = item.source.name;
          });
        }

        hljs.highlightBlock(json);// Reload the syntax in the block of code
      })
      .catch(err => {
        console.log(err);
      });
  });
}