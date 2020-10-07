const businessPOST = document.getElementById('businessPOST');
var businessBlock = document.getElementById('businessBlock');
var businessReponse = document.getElementById('businessReponse');
var businessImage = [];
var businessTitle = [];
var businessAdress = [];
var businessNote = [];
for (var i = 1; i < 13; i++) {
  businessImage[i] = document.getElementById('businessImage-'+i);
  businessTitle[i] = document.getElementById('businessTitle-'+i);
  businessAdress[i] = document.getElementById('businessAdress-'+i);
  businessNote[i] = document.getElementById('businessNote-'+i);
}

const token = document.querySelector('meta[name="csrf-token"]').content;


businessPOST.addEventListener('submit', function(e) {
  e.preventDefault();

  const url = this.getAttribute('action');
  postData = new FormData(businessPOST);

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
    businessReponse.innerHTML = JSON.stringify(data, undefined, 2);

    if (data.status != 'FAIL') {
      businessBlock.style.display = "flex";

      data.businesses.forEach((item, i) => {
        businessImage[i+1].src = typeof item.id !== 'undefined' ? item.image_url : '';
        businessTitle[i+1].innerHTML = typeof item.id !== 'undefined' ? item.name : '';
        businessAdress[i+1].innerHTML = typeof item.id !== 'undefined' ? item.location.display_address.[0]+'<br>'+item.location.display_address.[1]+'<br>'+item.location.display_address.[2]+'<br>' : '';
        businessNote[i+1].innerHTML = typeof item.id !== 'undefined' ? item.rating : '';
      });
    }

    hljs.highlightBlock(businessReponse);// Reload the syntax in the block of code
  })
  .catch(err => {
    console.log(err);
  });
});
