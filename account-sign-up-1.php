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
	<link rel="stylesheet" href="css/new2.css" />
</head>
<body>
	<div class="account">
		<div class="account__sidebar">
			<a href="/" class="logo account__logo"><img src="img/logo.svg" alt=""></a>
			<div class="account__body">
				<ul class="account__menu">
					<li><a href="account.php">Вход</a></li>
					<li class="active"><a href="account-sign-up.php">Регистрация</a></li>
				</ul>
				<div class="account__text">
					<p>Для входа в личный кабинет Вам на номер телефона, который был указан при заключении договора: (***) ***-98-85 будет отправлен временный пароль.</p>
					<p>Если Вы больше не имеете доступ к данному телефонному номеру, то необходимо отправить уведомление по адресу электронной почты: <a href="mailto:cs@rshbins-life.ru"><strong>cs@rshbins-life.ru</strong></a> <br>или позвонить в КЦ по номеру телефона: <br><a href="tel:88005008778"><strong>8 (800) 500 87 78</strong></a></p>
				</div>
				<div class="account__nav">
					<a href="account-sign-up.php" class="account__back-btn"><i class="icon-arrow-left"></i> Назад</a>
					<a href="account-sign-up-2.php" class="btn btn--huge btn--yellow account__next-btn">Далее</a>
				</div>	
			</div>
			<div class="account__footer">
				<a href="account-payment.php" class="btn btn--huge btn--white btn--block account__footer-btn">Оплатить договор по коду</a>
				<div class="account__contacts">
					<div class="account__contact">
						<a href="tel:88005008778" class="account__contact-link">8 (800) 500 87 78</a>
						<span class="account__contact-caption">Контактный центр</span>
					</div>
					<div class="account__contact">
						<a href="mailto:cs@rshbins-life.ru" class="account__contact-link">cs@rshbins-life.ru</a>
						<span class="account__contact-caption">E-mail</span>
					</div>
				</div>
			</div>
		</div>
		<div class="account__slider">
			<div class="account__slide" style="background-image:url(img/account/0.jpg)">
				<div class="account__slide-text">
					<h2>Заголовок в&nbsp;две строки</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h3>от 12 000 р.</h3>
				</div>
				<a href="product.php" class="btn btn--big btn--green account__slide-btn">Оформить</a>
			</div>
			<div class="account__slide" style="background-image:url(img/account/1.jpg)">
				<div class="account__slide-text">
					<h2>Заголовок в&nbsp;две строки</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h3>от 12 000 р.</h3>
				</div>
				<a href="product.php" class="btn btn--big btn--green account__slide-btn">Оформить</a>
			</div>
			<div class="account__slide" style="background-image:url(img/account/2.jpg)">
				<div class="account__slide-text">
					<h2>Заголовок в&nbsp;две строки</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h3>от 12 000 р.</h3>
				</div>
				<a href="product.php" class="btn btn--big btn--green account__slide-btn">Оформить</a>
			</div>
			<div class="account__slide" style="background-image:url(img/account/3.jpg)">
				<div class="account__slide-text">
					<h2>Заголовок в&nbsp;две строки</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h3>от 12 000 р.</h3>
				</div>
				<a href="product.php" class="btn btn--big btn--green account__slide-btn">Оформить</a>
			</div>
			<div class="account__slide" style="background-image:url(img/account/4.jpg)">
				<div class="account__slide-text">
					<h2>Заголовок в&nbsp;две строки</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h3>от 12 000 р.</h3>
				</div>
				<a href="product.php" class="btn btn--big btn--green account__slide-btn">Оформить</a>
			</div>
		</div>
	</div>
	
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="libs/counter/jquery.spincrement.min.js"></script>
	<script src="libs/ion-range-slider/ion.rangeSlider.min.js"></script>
	<script src="libs/air-datepicker/datepicker.min.js"></script>
	<script src="js/account.js"></script>	
</body>

</html>