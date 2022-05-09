$(document).ready(function () {
  $(".feature").on("click", function () {
    $("#banner1").fadeOut();
    $("#banner3").fadeIn().css("display", "block");
    $("#banner2").css("display", "none");
  });

  $(".docs").on("click", function () {
    $("#banner1").fadeOut();
    $("#banner3").fadeOut();
    $("#banner2").fadeIn().css("display", "block");
  });

  $(".homebanner").on("click", function () {
    $("#banner1").fadeIn();
    $("#banner3").fadeOut();
    $("#banner2").fadeOut();
  });
});

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
