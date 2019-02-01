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