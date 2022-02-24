$(document).ready(function() {
  var menu = () => {
    $(".menu ul").toggleClass('visible');
  }
  var search = () => {
    $(".search").toggleClass('on');
    $(".search input").toggleClass('maxwidth');
  }
 $('.menu').on("click", menu);
 $('.search-alternative img').on("click", search);
 $('.searchblack img').on("click", search);
});
