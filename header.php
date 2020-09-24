<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вёрстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	
	<link rel="shortcut icon" type="image/png" href="img/favicon/icon_16x16.png" sizes="16x16">
  <link rel="shortcut icon" type="image/png" href="img/favicon/icon_32x32.png" sizes="32x32">
  <link rel="shortcut icon" type="image/png" href="img/favicon/icon_96x96.png" sizes="96x96">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" sizes="180x180">
	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/wow/animate.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="libs/ion-range-slider/ion.rangeSlider.min.css" />
	<link rel="stylesheet" href="libs/air-datepicker/datepicker.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/new.css" />
</head>
<body class="<?=$header_abs ? "" : "inner-page";?>">
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
				<ul class="header__nav">
					<li><a href="catalog.php">Доход на капитал</a></li>
					<li><a href="catalog.php">Воплощение мечты</a></li>
					<li><a href="catalog.php">Пенсия+</a></li>
					<li><a href="catalog.php">Забота о здоровье</a></li>
				</ul>
				<a href="javascript:;" class="header__tool icon-eye" id="accessibility-mode-btn" title="Версия для слабовидящих"></a>
				<a href="javascript:;" class="header__tool search-btn icon-magnify"></a>
				<a href="https://online.rshbins-life.ru/lk/login" target="_blank" class="btn btn--light btn--small header__btn header__btn--tablet"><i class="icon-enter btn__icon btn__icon--light"></i> Личный кабинет</a>
				<a href="https://online.rshbins-life.ru/lk/login" target="_blank" class="header__auth-link"><i class="icon-enter"></i> Войти</a>
			</div>
		</div>
		<div class="header__menu">
			<div class="wrapper header__menu-wrapper">
				<div class="header__menu-column">
					<ul class="header__menu-list">
						<li>
							<a href="catalog.php">Программы накопления</a>
							<ul>
								<li><a href="subcatalog.php">«Мечты под защитой»</a></li>
								<li><a href="subcatalog.php">«Золотой запас»</a></li>
								<li><a href="subcatalog.php">«Безусловный доход»</a></li>
							</ul>
						</li>
						<li>
							<a href="catalog.php">Программы финансовой поддержки</a>
							<ul>
								<li><a href="subcatalog.php">«Золотой запас»</a></li>
							</ul>
						</li>
						<li>
							<a href="catalog.php">Программы инвестирования</a>
							<ul>
								<li><a href="subcatalog.php">«Недюжинный доход»</a></li>
								<li><a href="subcatalog.php">«Вершина успеха»</a></li>
							</ul>
						</li>
						<li>
							<a href="catalog.php">Программы здоровья</a>
							<ul>
								<li><a href="subcatalog.php">«Выбери здоровье»</a></li>
								<li><a href="subcatalog.php">«Выбери здоровье ПЛЮС»</a></li>
								<li><a href="subcatalog.php">«Здоровье под защитой»</a></li>
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
	
	<div class="location">
		<i class="icon-close location__close-btn"></i>
		<form action="" class="search-form location__search">
			<div class="search-form__inner">
				<input type="search" class="search-form__input" placeholder="Поиск по городам" required />
				<i class="icon-close search-form__clear-btn"></i>
				<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
			</div>			
		</form>
		<div class="location__body">
			<ul class="location__list">
				<li>
					<span>а</span>
					<ul>					
						<li><a href="javascript:;">Адыгейский</a></li>
						<li><a href="javascript:;">Алтайский</a></li>
						<li><a href="javascript:;">Амурский</a></li>
						<li><a href="javascript:;">Архангельский</a></li>
					</ul>
				</li>
				<li>
					<span>б</span>
					<ul>					
						<li><a href="javascript:;">Башкирский</a></li>
						<li><a href="javascript:;">Белгородский</a></li>
						<li><a href="javascript:;">Брянский</a></li>
						<li><a href="javascript:;">Бурятский</a></li>
					</ul>
				</li>
				<li>
					<span>в</span>
					<ul>					
						<li><a href="javascript:;">Владимирский</a></li>
						<li><a href="javascript:;">Волгоградский</a></li>
						<li><a href="javascript:;">Воронежский</a></li>
					</ul>
				</li>
				<li>
					<span>д</span>
					<ul>
						<li><a href="javascript:;">Дагестанский</a></li>
					</ul>
				</li>
				<li>
					<span>и</span>
					<ul>					
						<li><a href="javascript:;">Ивановский</a></li>
						<li><a href="javascript:;">Ингушский</a></li>
						<li><a href="javascript:;">Иркутский</a></li>
					</ul>
				</li>
				<li>
					<span>к</span>
					<ul>					
						<li><a href="javascript:;">Калининградский</a></li>
						<li><a href="javascript:;">Калужский</a></li>
						<li><a href="javascript:;">Камчатский</a></li>
						<li><a href="javascript:;">Кемеровский</a></li>
						<li><a href="javascript:;">Кировский</a></li>
						<li><a href="javascript:;">Коми</a></li>
						<li><a href="javascript:;">Костромской</a></li>
						<li><a href="javascript:;">Краснодарский</a></li>
						<li><a href="javascript:;">Красноярский</a></li>
						<li><a href="javascript:;">Курский</a></li>
					</ul>
				</li>
				<li>
					<span>л</span>
					<ul>
						<li><a href="javascript:;">Липецкий</a></li>
					</ul>
				</li>
				<li>
					<span>м</span>
					<ul>
						<li><a href="javascript:;">Марийский</a></li>
						<li><a href="javascript:;">Мордовский</a></li>
						<li><a href="javascript:;">Московский ЦРМБ</a></li>
					</ul>
				</li>
				<li>
					<span>н</span>
					<ul>
						<li><a href="javascript:;">Нижегородский</a></li>
						<li><a href="javascript:;">Новгородский</a></li>
						<li><a href="javascript:;">Новосибирский</a></li>
					</ul>
				</li>
				<li>
					<span>о</span>
					<ul>
						<li><a href="javascript:;">Омский</a></li>
						<li><a href="javascript:;">Оренбургский</a></li>
						<li><a href="javascript:;">Орловский</a></li>
					</ul>
				</li>
				<li>
					<span>п</span>
					<ul>
						<li><a href="javascript:;">Пензенский</a></li>
						<li><a href="javascript:;">Пермский</a></li>
						<li><a href="javascript:;">Приморский</a></li>
						<li><a href="javascript:;">Псковский</a></li>
					</ul>
				</li>
				<li>
					<span>р</span>
					<ul>
						<li><a href="javascript:;">Ростовский</a></li>
						<li><a href="javascript:;">Рязанский</a></li>
					</ul>
				</li>
				<li>
					<span>с</span>
					<ul>
						<li><a href="javascript:;">Самарский</a></li>
						<li><a href="javascript:;">Санкт-Петербургский</a></li>
						<li><a href="javascript:;">Саратовский</a></li>
						<li><a href="javascript:;">Сахалинский</a></li>
						<li><a href="javascript:;">Свердловский</a></li>
						<li><a href="javascript:;">Смоленский</a></li>
						<li><a href="javascript:;">Ставропольский</a></li>
					</ul>
				</li>
				<li>
					<span>т</span>
					<ul>
						<li><a href="javascript:;">Тамбовский</a></li>
						<li><a href="javascript:;">Татарстанский</a></li>
						<li><a href="javascript:;">Тверской</a></li>
						<li><a href="javascript:;">Томский</a></li>
						<li><a href="javascript:;">Тувинский</a></li>
						<li><a href="javascript:;">Тульский</a></li>
						<li><a href="javascript:;">Тюменский</a></li>
					</ul>
				</li>
				<li>
					<span>у</span>
					<ul>
						<li><a href="javascript:;">Удмуртский</a></li>
						<li><a href="javascript:;">Ульяновский</a></li>
					</ul>
				</li>
				<li>
					<span>х</span>
					<ul>
						<li><a href="javascript:;">Хабаровский</a></li>
					</ul>
				</li>
				<li>
					<span>ц</span>
					<ul>
						<li><a href="javascript:;">Центр корпоративного бизнеса</a></li>
					</ul>
				</li>
				<li>
					<span>ч</span>
					<ul>
						<li><a href="javascript:;">Челябинский</a></li>
						<li><a href="javascript:;">Чеченский</a></li>
						<li><a href="javascript:;">Читинский</a></li>
						<li><a href="javascript:;">Чувашский</a></li>
					</ul>
				</li>
				<li>
					<span>я</span>
					<ul>
						<li><a href="javascript:;">Якутский</a></li>
						<li><a href="javascript:;">Ярославский</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>