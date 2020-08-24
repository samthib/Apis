const stocksPOST = document.getElementById('stocksPOST');
var stocksBlock = document.getElementById('stocksBlock');
var stocksReponse = document.getElementById('stocksReponse');
var stocksSymbol = document.getElementById('stocksSymbol');
var stocksRate = document.getElementById('stocksRate');
var stocksResult = document.getElementById('stocksResult');
var stocksDate = document.getElementById('stocksDate');
var stocksH = document.getElementById('stocksH');
var stocksC = document.getElementById('stocksC');
var stocksO = document.getElementById('stocksO');
var stocksL = document.getElementById('stocksL');
const token = document.querySelector('meta[name="csrf-token"]').content;


stocksPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(stocksPOST);

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
    stocksReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      stocksBlock.style.display = "flex";
      stocksSymbol.innerHTML = data.symbol;
      stocksRate.innerHTML = data.c;
      if (data.change >= 0) {
        stocksResult.innerHTML = "<span class='text-success'><b>&and;</b> "+data.percentchange+"% "+"<small>("+data.change+")</small></span>";
      } else {
        stocksResult.innerHTML = "<span class='text-danger'><b>&or;</b> "+data.percentchange+"% "+"<small>("+data.change+")</small></span>";
      }
      stocksDate.innerHTML = new Date(data.t * 1000).toDateString();// * 1000 to set in milliseconds.
      stocksH.innerHTML = data.h;
      stocksC.innerHTML = data.c;
      stocksO.innerHTML = data.o;
      stocksL.innerHTML = data.l;
    }
  })
  .catch(err => {
    console.log(err);
  });
});
