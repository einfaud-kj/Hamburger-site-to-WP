jQuery(function ($) {
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 1200px)").matches) {
      $(".js-button").removeClass("is-open");
      $(".l-sidebar").removeClass("is-open");
      // $(".l-sidebar").css("display", "block");
    }
  });
  // $(window).resize(function () {
  //   if (window.matchMedia("(max-width: 1200px)").matches) {
  //     $(".l-sidebar").css("display", "none");
  //   }
  // });
  $(".js-button").on("click", function () {
    $(".js-button__sidebar").toggleClass("is-open");
    $(".l-sidebar").toggleClass("is-open");
    // $(".l-sidebar").css("display", "block");
  });
  $(".js-button__sidebar").on("click", function () {
    $(this).removeClass("is-open");
    $(".l-sidebar").removeClass("is-open");
  });
});
