jQuery(function ($) {
  $(".js-button").on("click", function () {
    $(this).toggleClass("is-open");
    $(".l-sidebar").toggleClass("is-open");
  });
});
