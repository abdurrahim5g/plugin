/**
 * --> All script's for scroll to top plugin
 */

(function () {
  jQuery(document).ready(function () {
    // when scroll the window
    jQuery(window).scroll(function () {
      let scrollTop = jQuery(window).scrollTop();
      if (scrollTop > 100) {
        jQuery("#scroll-top").addClass("show-button");
      } else {
        jQuery("#scroll-top").removeClass("show-button");
      }
    });

    // afte click the button
    jQuery("body").on("click", "#scroll-top a", function () {
      jQuery("html, body").animate({ scrollTop: 0 }, 500);
      return false;
    });
  });
})(jQuery);
