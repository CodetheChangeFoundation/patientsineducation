//
// Scripts
//

// Engagements page
$('.show-more-button').on('click', function (event) {
   $('.collapse.show').collapse('show');
});

$('.closeIcon').on('click', function () {
   $('.collapse.show').collapse('hide');
});