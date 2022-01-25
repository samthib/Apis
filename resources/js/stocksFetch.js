const stocks = document.querySelector('#stocks');

if (stocks) {
  stocks.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var symbol = this.querySelector('.response-symbol');
  var rate = this.querySelector('.response-rate');
  var result = this.querySelector('.response-result');
  var date = this.querySelector('.response-date');
  var height = this.querySelector('.response-height');
  var close = this.querySelector('.response-close');
  var open = this.querySelector('.response-open');
  var low = this.querySelector('.response-low');

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
      symbol.innerHTML = data.symbol;
      rate.innerHTML = data.c;
      if (data.change >= 0) {
        result.innerHTML = "<span class='text-success'><b>&#9650;</b> "+data.percentchange+"% "+"<small>("+data.change+")</small></span>";
      } else {
        result.innerHTML = "<span class='text-danger'><b>&#9660;</b> "+data.percentchange+"% "+"<small>("+data.change+")</small></span>";
      }
      date.innerHTML = new Date(data.t * 1000).toDateString();// * 1000 to set in milliseconds.
      height.innerHTML = data.h;
      close.innerHTML = data.c;
      open.innerHTML = data.o;
      low.innerHTML = data.l;
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
}