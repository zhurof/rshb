<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li><a href="news.php">Новости и обзоры</a></li>
					<li>Детальная страница новости</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper sidebar-page__wrapper">
				<div class="sidebar-page__main">
					<div class="post">
						<div class="post__head">
							<h1 class="post__title">Клиенты «РСХБ-Страхование жизни» теперь могут подать заявление на выплату не выходя из дома</h1>
							<div class="post__info">
								<div class="post__date">18 августа 2020</div>
								<a href="news.php" class="post__category">Общие новости</a>
								<div class="share post__share">
									<span class="share__title">Поделиться в соцсетях:</span>
									<a href="javascript:;" class="share__link fa-vk"></a>
									<a href="javascript:;" class="share__link fa-facebook"></a>
									<a href="javascript:;" class="share__link fa-twitter"></a>
								</div>
							</div>							
							<div class="post__excerpt">
								<p>Новый сервис доступен владельцам полисов инвестиционного и накопительного страхования жизни. С его помощью можно подать онлайн заявление на выплату по страховому случаю «дожитие» до определенной даты по договору. Мы принимаем онлайн заявления как на ежегодную выплату, так и по окончании договора.</p>
							</div>
							<img src="img/post.jpg" alt="" class="post__image">
						</div>
						<div class="post__body">
							<p>Раньше, чтобы получить выплаты, клиенты скачивали с сайта компании заявление, заполняли его, собирали пакет документов и предоставляли в страховую. На это уходило до двух недель, плюс 15 рабочих дней компания берет на проверку данных и выплату денег.</p>
							<p>Как сэкономить время и подать заявление через Личный кабинет на сайте или в мобильном приложении «РСХБ Жизнь» для iOS и Android:</p>
							<ul>
								<li>перейти в раздел «Мои обращения»;</li>
								<li>нажать кнопку «Создать» или кнопку «+» в мобильном приложении;</li>
								<li>в форме «Создание обращения» выберать тему обращения «Заявление на страховую выплату»;</li>
								<li>выбрать договор, по которому получаете выплату;</li>
								<li>приложить скан-копию или фото паспорта;</li>
								<li>проверить контактные данные и заполнить банковские реквизиты.</li>
							</ul>
							<p>Новый сервис доступен владельцам полисов инвестиционного и накопительного страхования жизни. С его помощью можно подать онлайн заявление на выплату по страховому случаю «дожитие» до определенной даты по договору. Мы принимаем онлайн заявления как на ежегодную выплату, так и по окончании договора.</p>
							<p>Раньше, чтобы получить выплаты, клиенты скачивали с сайта компании заявление, заполняли его, собирали пакет документов и предоставляли в страховую. На это уходило до двух недель, плюс 15 рабочих дней компания берет на проверку данных и выплату денег.</p>
							<p>Как сэкономить время и подать заявление через Личный кабинет на сайте или в мобильном приложении «РСХБ Жизнь» для iOS и Android:</p>
						</div>
					</div>
				</div>
				<aside class="sidebar sidebar-page__sidebar">
					<div class="sidebar__inner">
						<form action="" class="search-widget">
							<button class="icon-magnify search-widget__btn"></button>
							<input type="text" class="search-widget__input" placeholder="Поиск по новостям..." />
							<i class="icon-close search-widget__clear-btn"></i>						
						</form>
						<a href="javascript:;" class="banner-widget">
							<span class="banner-widget__text">
								<span class="banner-widget__subtitle">Промо баннер</span>
								<span class="banner-widget__title">Вершина успеха</span>
							</span>
							<img src="img/post-widget.png" alt="" class="banner-widget__img">
						</a>
						<div class="contact-widget">
							<div class="contact-widget__text">
								<h3 class="contact-widget__title">Нужна помощь?</h3>
								<p>Посетите <a href="javascript:;">ближайший офис</a> или обратитесь онлайн к нашему специалисту</p>
							</div>
							<a href="#feedback" class="btn btn--white btn--medium-large btn--block" data-fancybox><i class="icon-comment btn__icon"></i> Написать сообщение</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
		
		<div class="news-section">
			<div class="wrapper">
				<h2 class="news-section__title news-section__title--single">Недавние публикации</h2>
				<div class="box news-section__box">
					<?for($i=0;$i<3;$i++):?>
						<div class="post-card">
							<div class="post-card__pic"></div>
							<div class="post-card__text">
								<div class="post-card__info">
									<span class="post-card__date">24 декабря 2020</span>
									<a href="javascript:;" class="post-card__link">Категория</a>
								</div>	
								<h3 class="post-card__title"><a href="javascript:;">Андрей Чуйко возглавил <br>ООО «РСХБ-Страхование жизни»</a></h3>
								<p>В Россельхозбанке Андрей Чуйко работает с 2014 года. Более трех лет был заместителем </p>
							</div>
						</div>
					<?endfor;?>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	