$(document).ready(function () {
  $(".feature").on("click", function () {
    $("#banner3").fadeIn().css("display", "block");
    $("#banner1").fadeOut();
    $("#banner2").css("display", "none");
  });

  $(".docs").on("click", function () {
    $("#banner1").fadeOut();
    $("#banner3").fadeOut();
    $("#banner2").fadeOut().css("display", "block").fadeIn();
  });

  $(".navbar-brand").on("click", function () {
    $("#banner1").fadeIn();
    $("#banner3").fadeOut();
    $("#banner2").fadeOut();
  });
});
