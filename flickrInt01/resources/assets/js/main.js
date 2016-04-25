// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  

$('.grid-item').click(function(){
  var page = $("<input>")
               .attr("type", "hidden")
               .attr("name", "page").val($('#pageNumber').text());
  $('form#searchForm').append($(page));
  $('form#searchForm').submit();
})
