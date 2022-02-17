$(document).ready(function () {
	$('.accordion-one').click(function () {
		$(".accordion-two").toggleClass('open');
        $(".accordion-four").hasClass('open') ? $(".accordion-four").toggleClass('open') : true;
        $(".accordion-six").hasClass('open') ? $(".accordion-six").toggleClass('open') : true;
	});
    $('.accordion-three').click(function () {
		$(".accordion-four").toggleClass('open');
        $(".accordion-six").hasClass('open') ? $(".accordion-six").toggleClass('open') : true;
        $(".accordion-two").hasClass('open') ? $(".accordion-two").toggleClass('open') : true;
	});
    $('.accordion-five').click(function () {
		$(".accordion-six").toggleClass('open');
        $(".accordion-four").hasClass('open') ? $(".accordion-four").toggleClass('open') : true;
        $(".accordion-two").hasClass('open') ? $(".accordion-two").toggleClass('open') : true;
	});
});