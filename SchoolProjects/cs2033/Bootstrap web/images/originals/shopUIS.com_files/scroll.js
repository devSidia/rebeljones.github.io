// pins header at the top of the page
window.onscroll = function() {headerScroll()};

var header = document.getElementById("title-banner");
var sticky = header.offsetTop;

function headerScroll() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}