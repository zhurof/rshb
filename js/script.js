$('.menu-btn').click(function(){
	$(this).toggleClass('menu-btn--active');
	if($(this).is('.menu-btn--active')){
		$('.header').addClass('header--open');
	}else{
		$('.header').removeClass('header--open');		
	}	
	$('.header__menu').toggleClass('header__menu--open');
	$('.search-btn').removeClass('search-btn--active');
	$('.header__search').removeClass('header__search--active')
})
$('.search-btn').click(function(){
	if($(this).is('.search-btn--active')){
		$(this).removeClass('search-btn--active');
		$('.header').removeClass('header--open');
		$('.header__search').removeClass('header__search--active')
	}else{
		$(this).addClass('search-btn--active')
		$('.header').addClass('header--open');
		$('.header__search').addClass('header__search--active').find('input').focus();
		$('.menu-btn').removeClass('menu-btn--active');
		$('.header__menu').removeClass('header__menu--open');
	}	
})
$('.search-form__close-btn').click(function(){
	$('.header__search').removeClass('header__search--active');
	$('.header').removeClass('header--open');
	$('.search-btn').removeClass('search-btn--active');
})
$('.search-form__clear-btn').click(function(){
	$(this).siblings('.search-form__input').val('')
})

$('.header__menu-list a:not(:only-child)').click(function(e){
	if(innerWidth < 992){
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
		$(this).siblings('ul').slideToggle(300);
		$('.header__menu-list>.open').not($(this).parent()).removeClass('open').children('ul').slideUp(300);
	}
})
$('.top-block').slick({
	autoplay: true,
	autoplaySpeed: 5000,
	pauseOnHover: false,
	prevArrow: '<span class="top-block__arrow top-block__arrow--prev icon-angle-left" />',
	nextArrow: '<span class="top-block__arrow top-block__arrow--next icon-angle-right" />',
	dots: true,
	dotsClass: 'top-block__nav',
	customPaging: function(slick,i){
		return slick.$slides.eq(i).find('.top-block__title').text();
	},
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				arrows: false
			}
		},{
			breakpoint: 992,
			settings: {
				arrows: false,
				customPaging: function(){return ''}
			}
		}
	]
})

$('.services-block__trigger').click(function(e){
	e.preventDefault();
	var index = $(this).index();
	if(!$(this).is('.services-block__trigger--active')){
		$(this).addClass('services-block__trigger--active').siblings().removeClass('services-block__trigger--active');
		$(this).closest('.services-block').find('.services-block__tab').hide().eq(index).fadeIn(300);
	}
})

$('.news-section__nav li').click(function(e){
	e.preventDefault();
	var index = $(this).index();
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		$(this).closest('.news-section').find('.news-section__tab').hide().eq(index).fadeIn(300);
	}
})

$('.category-block__slider').slick({
	slidesToShow: 2,
	prevArrow: '<span class="category-block__arrow category-block__arrow--prev icon-angle-left" />',
	nextArrow: '<span class="category-block__arrow category-block__arrow--next icon-angle-right" />',
	customPaging: function(){return ''},
	dotsClass: 'category-block__dots',
	responsive: [
		{
			breakpoint: 1200,
			settings: {				
				slidesToShow: 1,
				arrows: false,
				dots: true
			}			
		}
	]
})

//функция для разделения числа на разряды
function numberWithSpaces(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

$('.range-field__input').ionRangeSlider({
	skin: "round",
	grid: true,
	hide_from_to: true,
	hide_min_max: true,
	onChange: function(data){		
		var number_value = parseFloat(data.from_value),
				output = data.slider.siblings('.range-field__output');
				
		if(isFinite(number_value)){
			if(data.from_value.indexOf('тыс') != -1){
				output.text(numberWithSpaces(number_value * 1000) + " P.")
			}else if (data.from_value.indexOf('млн +') != -1){
				output.text(numberWithSpaces(number_value * 1000000) + " P. +")
			}else{
				output.text(numberWithSpaces(number_value) + " P.")
			}
		}else{
			output.text(data.from_value)
		}		
	}
});

//подсказка в модальном окне для мобильной версии
$('.info').click(function(){
	
	var text = $(this).data('tooltip')
	if(text && innerWidth < 992){
		$.fancybox.open(text)
	}
})
$('.info-block__nav li').click(function(e){
	e.preventDefault();
	var index = $(this).index();
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		$(this).closest('.info-block').find('.info-block__tab').hide().eq(index).fadeIn(300);
	}
})

$('.feedback__nav li').click(function(){
	var index = $(this).index();
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		$(this).closest('.feedback').find('.feedback__tab').hide().eq(index).fadeIn(300);
	}
})

//всякое визуальное барахло
new WOW().init();

//счетчик
function counterInit(counter){
	var separator = " ";
	if($(counter).is('.counter--year')) separator = "";	
	
	$(counter).spincrement({
		duration: 2000,
		from: 0,
		thousandSeparator: separator
	})
}
var counters = new WOW(
  {
    boxClass:'counter',      
    animateClass: 'done', 
    mobile: true,       
    live: true,      
    callback: function(box) {
			setTimeout(counterInit(box),1000)
    }
  }
);
counters.init();

//карта
if($('#map').length){
	ymaps.ready(initMap);
}
function initMap(){
	var myMap = new ymaps.Map('map', {
		center: [55.755814,37.617635],
		zoom: 10.5
	}),
	objectManager = new ymaps.ObjectManager();
	
	objectManager.objects.options.set({
		iconLayout: 'default#image',
		iconImageHref: '/img/map-marker.svg',
		iconImageSize: [36, 36],
		iconImageOffset: [-18, -18]
	});
	myMap.geoObjects.add(objectManager);
	
	
	$.ajax({
		url: "/map-geopoints.json"
	}).done(function(data) {
		objectManager.add(data);
	});
}

$('.date-input').datepicker({
	range: true,
	position: 'bottom right',
	multipleDatesSeparator: ' - '
})

//Кастомный select
$('.select').blur(function(){
	$(this).removeClass('select--open');
})
$('.select').click(function(e){
	if(!$(e.target).closest('.select__list,.select__input').length){
		$(this).toggleClass('select--open');
	}	
})
$('.select__list>li').click(function(){
	var value = $(this).attr('data-value') || $(this).text(),
			select = $(this).parents('.select');
			
	select.removeClass('select--open');
	select.find('.select__input').val(value).trigger('change');
})
$('.select__input').on('change',function(){
	var wrapper = $(this).parent('.select'),
			textValue = $(this).children(':selected').text();
	if(this.value){
		//wrapper.addClass('select--filled')
		wrapper.find('.select__output').text(textValue);	
	}else{
		//wrapper.removeClass('select--filled')
		wrapper.find('.select__output').text('');
	}	
})

$('form').on('reset',function(){	
	//обновление кастомного селекта после очистки формы
	var selects = $(this.elements).filter('.select__input');	
	setTimeout(function(){selects.trigger('change')},1)
})

//убираем баннер-предупреждение и записываем куку по этому поводу
$('.cookies__btn').click(function(e){
	e.preventDefault()
	document.cookie = "cookie-message=true";
	$(this).parents('.cookies').fadeOut(300);
})