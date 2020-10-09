$('.preloader__counter').spincrement({
	duration: 2000,
	from: 0,
	easing: 'linear',
	complete: function(){
		$('.preloader').fadeOut(300);
	}
})
$('.preloader__bar').addClass('preloader__bar--animate')

$('.account__slider').slick({
	autoplay: true,
	autoplaySpeed: 5000,
	pauseOnHover: false,
	touchThreshold: 100,
	fade: true,
	prevArrow: '<span class="account__arrow account__arrow--prev icon-angle-left" />',
	nextArrow: '<span class="account__arrow account__arrow--next icon-angle-right" />',
	dots: true,
	dotsClass: 'account__dots',
	customPaging: function(slick,i){
		return '';
	},
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				arrows: false
			}
		},{
			breakpoint: 768,
			settings: {
				arrows: false,
				dots: false
			}
		}
	]
})
$('.field__icon--pass').click(function(){
	$(this).toggleClass('icon-eye icon-eye-slash');
	var input = $(this).siblings('input').get(0);
	input.type = input.type == 'text' ? 'password' : 'text';
})

$('.field__input--date').datepicker({
	position: 'bottom right',
	multipleDatesSeparator: ' - '
})