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

//onclick next page
$('.grid').click(function(){
  var page = $("<input>")
               .attr("type", "hidden")
               .attr("name", "page").val(Number($('#pageNumber').text()));
  $('form#searchForm').append($(page));
  $('form#searchForm').submit();
})
