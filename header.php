<!doctype html>
<html lang="ru">
<head>
	<!-- Запасной редирект на страницу для старых браузеров (IE9 и старше) для хитрецов, использующих режим эмуляции в IE11. Основоной редирект в .htaccess  -->
	<!--[if lt IE 10]><script>location.href='/old-browser.html';</script><![endif]-->
	<meta charset="UTF-8">
	<title>Вёрстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/wow/animate.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="libs/ion-range-slider/ion.rangeSlider.min.css" />
	<link rel="stylesheet" href="libs/air-datepicker/datepicker.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header <?=$header_abs ? "header--abs" : "";?>">
		<div class="wrapper">
			<div class="header__topline">
				<a href="javascript:;" class="header__location"><i class="icon-map-marker"></i><span>Москва</span></a>
				<ul class="header__top-nav">
					<li><a href="about.php">Компания</a></li>
					<li><a href="contacts.php">Контакты и офисы</a></li>
					<li><a href="javascript:;">Вопросы и ответы</a></li>
					<li><a href="javascript:;">Страховой случай</a></li>
					<li><a href="javascript:;">Оплата полиса</a></li>
				</ul>
				<a href="https://online.rshbins-life.ru/lk/login" target="_blank" class="btn btn--light btn--small header__btn"><i class="icon-enter btn__icon btn__icon--light"></i> Личный кабинет</a>
				<div class="header__phone header__phone--desktop">
					<a href="tel:88005008778" class="header__phone-number">8 800 500 87 78</a>
					<div class="header__phone-caption header__phone-caption--opacity">Звонок по России бесплатный</div>
				</div>
			</div>
			<div class="header__bottomline">
				<span class="menu-btn"></span>
				<a href="/" class="logo header__logo"><img src="img/logo.svg" alt=""></a>
				<a href="/" class="logo header__logo header__logo--mobile"><img src="img/logo-mobile.svg" alt=""></a>
				<ul class="header__nav">
					<li><a href="category.php">Доход на капитал</a></li>
					<li><a href="category.php">Воплощение мечты</a></li>
					<li><a href="category.php">Пенсия+</a></li>
					<li><a href="category.php">Забота о здоровье</a></li>
				</ul>
				<a href="javascript:;" class="header__tool icon-eye" id="accessibility-mode-btn" title="Версия для слабовидящих"></a>
				<a href="javascript:;" class="header__tool search-btn icon-magnify"></a>
			</div>
		</div>
		<div class="header__menu">
			<div class="wrapper header__menu-wrapper">
				<div class="header__menu-column">
					<ul class="header__menu-list">
						<li>
							<a href="category.php">Программы накопления</a>
							<ul>
								<li><a href="subcategory.php">«Мечты под защитой»</a></li>
								<li><a href="subcategory.php">«Золотой запас»</a></li>
								<li><a href="subcategory.php">«Безусловный доход»</a></li>
							</ul>
						</li>
						<li>
							<a href="category.php">Программы финансовой поддержки</a>
							<ul>
								<li><a href="subcategory.php">«Золотой запас»</a></li>
							</ul>
						</li>
						<li>
							<a href="category.php">Программы инвестирования</a>
							<ul>
								<li><a href="subcategory.php">«Недюжинный доход»</a></li>
								<li><a href="subcategory.php">«Вершина успеха»</a></li>
							</ul>
						</li>
						<li>
							<a href="category.php">Программы здоровья</a>
							<ul>
								<li><a href="subcategory.php">«Выбери здоровье»</a></li>
								<li><a href="subcategory.php">«Выбери здоровье ПЛЮС»</a></li>
								<li><a href="subcategory.php">«Здоровье под защитой»</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="header__menu-column">
					<ul class="header__menu-list">
						<li>
							<a href="about.php">Компания</a>
							<ul>
								<li><a href="about.php">Общие сведения о компании</a></li>
								<li><a href="property-structure.php">Структура собственности</a></li>
								<li><a href="javascript:;">Миссия и ценности</a></li>
								<li><a href="management.php">Совет директоров</a></li>
								<li><a href="team.php">Команда</a></li>
								<li><a href="javascript:;">Вакансии</a></li>
								<li><a href="fatca.php">FATCA</a></li>
								<li><a href="contacts.php">Контакты</a></li>
								<li><a href="javascript:;">Раскрытие информации</a></li>
								<li><a href="javascript:;">Реквизиты компании</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="header__menu-column">
					<ul class="header__menu-list">
						<li>
							<a href="javascript:;">Частным клиентам</a>
							<ul>
								<li><a href="https://online.rshbins-life.ru/lk/login" target="_blank">Личный кабинет</a></li>
								<li><a href="javascript:;">Оплата полиса</a></li>
								<li><a href="javascript:;">Страховой случай</a></li>
								<li><a href="javascript:;">Где купить</a></li>
								<li><a href="javascript:;">Вопросы и ответы</a></li>
								<li><a href="javascript:;">Налоговый вычет</a></li>
								<li><a href="javascript:;">Документы по страховым продуктам</a></li>
								<li><a href="javascript:;">Глоссарий</a></li>
								<li><a href="javascript:;">Полезная информация</a></li>
							</ul>
						</li>
						<li><a href="javascript:;">Корпоративным клиентам</a></li>
						<li>
							<a href="javascript:;">Партнерам</a>
							<ul>
								<li><a href="javascript:;">Как стать нашим агентом</a></li>
								<li><a href="javascript:;">Идеи для совместных активностей</a></li>
							</ul>
						</li>
						<li><a href="javascript:;">VIP-клиентам</a></li>
					</ul>
				</div>
				<div class="header__menu-column">
					<ul class="header__menu-list">
						<li>
							<a href="news.php">Новости и обзоры</a>
							<ul>
								<li><a href="news.php">Общие новости</a></li>
								<li><a href="news.php">Обзоры стратегий/ индексов</a></li>
								<li><a href="news.php">Статьи РСХБ-СЖ</a></li>
								<li><a href="javascript:;">История выплат</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">Закупки</a>
							<ul>
								<li><a href="docs.php">Документы</a></li>
								<li><a href="javascript:;">Тендеры на ЭТП</a></li>
							</ul>
						</li>
					</ul>
					<div class="header__feedback">
						<a href="javascript:;" class="btn btn--small header__feedback-btn">Задать вопрос</a>
						<div class="header__phone">
							<a href="tel:88005008778" class="header__phone-number">8 800 500 87 78</a>
							<div class="header__phone-caption">График работы колл-центра: <br>ежедневно с 8-00 до 20-00 по мск</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__search">
			<div class="wrapper">
				<form action="" class="search-form header__search-form">
					<div class="search-form__inner">
						<input type="search" class="search-form__input search-form__input--low" placeholder="Поиск по сайту ..." required />
						<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
					</div>
					<i class="icon-close search-form__close-btn"></i>
				</form>
			</div>
		</div>
	</header>