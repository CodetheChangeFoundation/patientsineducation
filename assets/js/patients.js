//
// Scripts
//

// Engagements page
$('.show-more-button').on('click', function (event) {
   $('.collapse.show').collapse('show');
});

$('.close-icon').on('click', function () {
   $('.collapse.show').collapse('hide');
});

// counter animation
var runsOnce = true;

function isScrolledIntoView($elem) {
   if ($($elem).length) {
      var windowTop = $(window).scrollTop();
      var windowBottom = windowTop + $(window).height();
      var elem = $elem.offset().top + $elem.height()/2;
      return ((elem <= windowBottom) && (elem >= windowTop));
   }
   return false;
};

$(document).ready(function () {
   $(document).on('scroll', function () {
      if (isScrolledIntoView($('.counter')) && runsOnce) {
         $('.counter').each(function () {
            const width = $(this).width();
            $(this).width(width);
            $(this).prop('Counter', 0).animate({
               Counter: $(this).text()
            }, {
               duration: 2000,
               easing: 'linear',
               step: function (now) {
                  $(this).text(Math.ceil(now));
               }
            });
         });
         runsOnce = false;
      }
   }).trigger('scroll');
});