mybutton = document.getElementById("gotoTup");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.documentElement.scrollTop = 0; 
}

document.querySelector('button#close').addEventListener('click', function () {
  document.querySelector('.ads').classList.add('hidden') 
  document.querySelector('.ads-overlay').classList.add('hidden') 
})