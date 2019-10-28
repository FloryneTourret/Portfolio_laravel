require('./bootstrap');

window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var fixed = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= fixed) {
    navbar.classList.add("fixed_nav")
  } else {
    navbar.classList.remove("fixed_nav");
  }
}