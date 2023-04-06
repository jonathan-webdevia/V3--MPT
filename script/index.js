function reveal() {
  var reveals = document.querySelectorAll(".serviceItem");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 10;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}

if (scrollY != 0) {
  console.log("ok");
} else {
  window.scrollTo(0, 10);
}

window.addEventListener("scroll", reveal);

function carMove() {
  var move = document.querySelectorAll(".carimg");

  for (var i = 0; i < move.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = move[i].getBoundingClientRect().top;
    var elementVisible = 10;

    if (elementTop < windowHeight - elementVisible) {
      move[i].classList.add("active");
    }
  }
}

if (scrollY != 0) {
  console.log("ok");
} else {
  window.scrollTo(0, 10);
}

window.addEventListener("scroll", carMove);
