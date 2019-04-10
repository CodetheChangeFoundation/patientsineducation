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

// Homepage
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

// Outreach section
var outreach = $('#outreach-archive');

outreach.on('click', function() {
   var archived = "Show Archived";
   var classes = "col-12 col-lg-4 pt-4";
   if (outreach[0].innerHTML == archived) {
      changeClass(classes);
      outreach[0].innerHTML = "Hide Archived";
   } else {
      changeClass(`${classes} d-none`);
      outreach[0].innerHTML = archived;
   }
});

function changeClass($classes) {
   var i = 3;
   var outreachElement = $(`#outreach-${i}`);
   while (outreachElement[0] !== undefined) {
      outreachElement[0].classList.value = $classes;
      i++;
      outreachElement = $(`#outreach-${i}`);
   }
}

// Contact Page
// enable link to tab
var url = document.location.toString();
if (url.match('#')) {
   $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
   window.location.hash = e.target.hash;
   window.scrollTo(0, 0);
})