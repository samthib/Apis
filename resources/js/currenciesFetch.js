const currenciesPOST = document.getElementById('currenciesPOST');
var currenciesBlock = document.getElementById('currenciesBlock');
var currenciesReponse = document.getElementById('currenciesReponse');
var currenciesRate = document.getElementById('currenciesRate');
var currenciesRateInverse = document.getElementById('currenciesRateInverse');
var currenciesResult = document.getElementById('currenciesResult');
const token = document.querySelector('meta[name="csrf-token"]').content;


currenciesPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(currenciesPOST);

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
    currenciesReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      currenciesBlock.style.display = "block";
      var keys = Object.keys(data.rates);
      currenciesResult.innerHTML = data.quantity+" "+data.base+" = <b>"+data.change+"</b> "+keys[0];
      currenciesRate.innerHTML = "1"+" "+data.base+"  &rlhar; "+data.rates[keys[0]].toPrecision(5)+" "+keys[0];
      currenciesRateInverse.innerHTML = "1"+" "+keys[0]+" &lrhar; "+(1/data.rates[keys[0]]).toPrecision(5)+" "+data.base;
    }

    hljs.highlightBlock(currenciesReponse);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
