// Add active class to the current button (highlight it)
window.addEventListener("load", function() {
  var header = document.getElementById("navbar-nav");
  var tab = header.querySelectorAll(".nav-item");
  var current = header.querySelector(".active");
  // Unactive old nav tab
  current.classList.toggle('active');

  tab.forEach(item => {
    if (item.children[0].href == window.location.href) {
      // Active new nav tab
      item.classList.toggle('active');
    }
  });
});
