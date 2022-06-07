jQuery(function ($) {
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 1200px)").matches) {
      $(".js-button__sidebar").removeClass("is-open");
      $(".p-sidebar").removeClass("is-open");
      $(".l-sidebar__overlay").removeClass("is-open");
      $("body").css("overflow-y", "");
    }
  });

  $(".js-button").on("click", function () {
    $(".p-sidebar").toggleClass("is-open");
    $(".l-sidebar__overlay").toggleClass("is-open");
    $("body").css("overflow-y", "hidden");
  });
  $(".js-button__sidebar").on("click", function () {
    $(".p-sidebar").removeClass("is-open");
    $(".l-sidebar__overlay").removeClass("is-open");
    $("body").css("overflow-y", "");
  });
});
