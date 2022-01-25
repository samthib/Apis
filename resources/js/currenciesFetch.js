const currencies = document.querySelector('#currencies');

if (currencies) {
  currencies.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

  const token = document.querySelector('meta[name="csrf-token"]').content;
  var block = this.querySelector('.response-block');
  var json = this.querySelector('.response-json');
  var result = this.querySelector('.response-result');
  var rate = this.querySelector('.response-rate');
  var rateInverse = this.querySelector('.response-rate-inverse');
  
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
      block.style.display = "block";
      
      var currency = Object.keys(data.rates)[0];
      result.innerHTML = data.quantity+" "+data.base+" = <b>"+data.change+"</b> "+currency;
      rate.innerHTML = "1"+" "+data.base+"  &rlhar; "+data.rates[currency].toPrecision(5)+" "+currency;
      rateInverse.innerHTML = "1"+" "+currency+" &lrhar; "+(1/data.rates[currency]).toPrecision(5)+" "+data.base;
    }

    hljs.highlightBlock(json);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
}