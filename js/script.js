//устанавка необходимых css-переменных. Нпример, в -webkit- браузерах на мобильных платформах 100vh работает некорректно из-за адресной строки, а 100vw во всех браузерах включает в себя ширину полосы прокрутки
function setCssVariables(){
	document.documentElement.style.setProperty('--w-height',window.innerHeight + 'px');
	document.documentElement.style.setProperty('--w-width',document.body.clientWidth + 'px');
	document.documentElement.style.setProperty('--sb-width',(innerWidth - document.body.clientWidth) + 'px');
	//высота частей шапки
	document.documentElement.style.setProperty('--h-top-height',document.querySelector('.header__topline').clientHeight + 'px');
	document.documentElement.style.setProperty('--h-bottom-height',document.querySelector('.header__bottomline').clientHeight + 'px');
}
setCssVariables();
$(window).resize(setCssVariables);


//шапка
var scrollTop = pageYOffset;

if(pageYOffset) $('.header').addClass('header--fixed');

$(window).scroll(function(){
	var header = $('.header'),
			sidebar = $('.sidebar__inner');
	if(pageYOffset){
		header.addClass('header--fixed')
	}else{
		header.removeClass('header--fixed')
	}
	if(scrollTop < pageYOffset && pageYOffset > innerHeight / 4){ //если прокрутка вниз
		
		header.not('.header--open').addClass('header--hidden');//скрываем шапку, если меню не открыто
		
		if(!header.is('.header--open')) sidebar.removeClass('sidebar__inner--translated')
	}else if(scrollTop > pageYOffset){
		header.removeClass('header--hidden');
		
		sidebar.addClass('sidebar__inner--translated')
	}
	scrollTop = pageYOffset;
})

//Специально для "любимого" IE, который не поддерживает position: sticky. Прилипание содержимого сайдбара к верху
if(navigator.userAgent.indexOf('Trident') != -1 && $('.sidebar .sidebar__inner').length){
	var headerHeight = $('.header__bottomline').outerHeight(),
			sidebar = $('.sidebar'),
			sidebarHeight = $('.sidebar').outerHeight(),
			sidebarContent = $('.sidebar__inner'),
			sidebarContentHeight = sidebarContent.outerHeight(),
			start = sidebar.offset().top,
			end = start + sidebarHeight;
			
	if(sidebarHeight > sidebarContentHeight){ 
		sidebarContent.width(sidebar.width());		
		
		$(window).scroll(function(){			
			//на некоторых страницах высота сайдбара непостоянна из-за меняющейся высоты основного контента (аккордионы), поэтому лучше пересчитывать
			sidebarHeight = $('.sidebar').outerHeight();
			end = start + sidebarHeight;
			
			if(pageYOffset > start - headerHeight - 15){				
				if(pageYOffset < end - sidebarContentHeight){
					sidebarContent.css({
						position: 'fixed',
						top: headerHeight + 15,
						bottom: ''
					})
				}else{
					sidebarContent.css({
						position: 'absolute',
						top: '',
						bottom: 0
					})
				}			
			}else{
				sidebarContent.css('position','')
			}
		})
	}		
}


$('.menu-btn').click(function(){
	$(this).toggleClass('menu-btn--active');
	if($(this).is('.menu-btn--active')){
		$('.header').addClass('header--open');
		$('body').addClass('scroll-hidden');
	}else{
		$('.header').removeClass('header--open');		
		$('body').removeClass('scroll-hidden');
	}	
	$('.header').removeClass('header--hidden');
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
		$('body').removeClass('scroll-hidden');
	}	
})
$('.search-form__close-btn').click(function(){
	$('.header__search').removeClass('header__search--active');
	$('.header').removeClass('header--open');
	$('.search-btn').removeClass('search-btn--active');
})
$('.search-form__clear-btn').click(function(){
	$(this).siblings('.search-form__input').val('').focus()
})

$('.search-widget__clear-btn').click(function(){
	$(this).siblings('.search-widget__input').val('').focus()
})

$('.header__menu-list a:not(:only-child)').click(function(e){
	if(innerWidth < 992){
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
		$(this).siblings('ul').slideToggle(300);
		$('.header__menu-list>.open').not($(this).parent()).removeClass('open').children('ul').slideUp(300);
	}
})
$('.header__location').click(function(e){
	e.preventDefault();
	$('.location').fadeIn(300)
})
$('.location__close-btn').click(function(){
	$(this).closest('.location').fadeOut(300)
})
$('.location__list a').click(function(e){
	e.preventDefault();
	var value = $(this).text();
	$('.header__location span').text(value);
	$('.location').fadeOut(300)
})

//
$('.top-block__slider').slick({
	autoplay: true,
	autoplaySpeed: 5000,
	pauseOnHover: false,
	speed: 1000,
	touchThreshold: 100,
	asNavFor: '.top-block__nav',
	prevArrow: '<span class="top-block__arrow top-block__arrow--prev icon-angle-left" />',
	nextArrow: '<span class="top-block__arrow top-block__arrow--next icon-angle-right" />',
	dotsClass: 'top-block__dots',
	customPaging: function(slick,i){
		return slick.$slides.eq(i).find('.top-block__title').html();
	},
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				arrows: false,
				dots: true
			}
		},{
			breakpoint: 768,
			settings: {
				arrows: false,
				dots: true,
				customPaging: function(){return ''}
			}
		}
	]
})
$('.top-block__nav').slick({
	asNavFor: '.top-block__slider',
	touchThreshold: 100,
	variableWidth: true,
	arrows: false,
	focusOnSelect: true
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
	touchThreshold: 100,
	responsive: [
		{
			breakpoint: 768,
			settings: {				
				slidesToShow: 1,
				variableWidth: true,
				arrows: false,
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

$('.search__nav li').click(function(){
	var index = $(this).index();
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		$(this).closest('.search').find('.search__tab').hide().eq(index).fadeIn(300);
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

//Свернутное положение текста в карточках категорий
function checkTextOverflow(){
	$('.category-card__text').each(function(){
		if(this.scrollHeight > this.clientHeight){
			$(this).addClass('category-card__text--hidden');
			if(!$(this).next('.category-card__dropdown').length){
				$(this).after('<span class="category-card__dropdown icon-angle-down"></span>')
			}
		}else{
			$(this).removeClass('category-card__text--hidden')
			$(this).next('.category-card__dropdown').remove()
		}
	})
}
checkTextOverflow();
$(window).resize(checkTextOverflow);

$('.category-card').on('click','.category-card__dropdown',function(e){
	$(this).prev('.category-card__text').addClass('category-card__text--open');
	$(this).remove()
})

//пошаговая форма обратной связи
$('.feedback__fieldset').find('input,select,textarea').on('input change',function(){
	if(!$(this).closest('.feedback__fieldset').find(':invalid').length){
		$(this).closest('.feedback__fieldset').next('.feedback__fieldset').slideDown(300)
	}
})

$('.accordion__trigger').click(function(){
	$(this).toggleClass('accordion__trigger--active');
	$(this).siblings('.accordion__text').slideToggle(300)
})
$('.accordion__btn').click(function(){
	$(this).closest('.accordion').find('.accordion__item').filter(':hidden').fadeIn(300)
	$(this).remove()
})