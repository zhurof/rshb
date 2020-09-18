<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li><a href="catalog.php">Программы</a></li>
					<li>НСЖ</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper sidebar-page__wrapper">
				<div class="sidebar-page__main">
					<div class="page-head">
						<h1 class="page-head__title">НСЖ</h1>
						<h3 class="page-head__subtitle">Программы накопительного страхования жизни</h3>
					</div>
					<div class="category">
						<div class="category__text">
							<p>Накопительное страхование жизни (НСЖ) позволяет накопить деньги на крупную покупку, обучение детей или прибавку к будущим доходам, не беспокоясь о том, что непредвиденные обстоятельства, связанные с жизнью и здоровьем, могут этому помешать.</p>
						</div>
						<div class="box category__box">
							<div class="card">
								<div class="card__text">
									<h4 class="card__subtitle">Программы накопления</h4>
									<h3 class="card__title"><a href="product.php">Мечты под&nbsp;защитой</a></h3>
								</div>
								<img class="card__img" src="img/services/simple/0.png" alt="">
							</div>
							<div class="card">
								<div class="card__text">
									<h4 class="card__subtitle">Программы накопления</h4>
									<h3 class="card__title"><a href="product.php">Золотой запас</a></h3>
								</div>
								<img class="card__img" src="img/services/simple/1.png" alt="">
							</div>
							<div class="card">
								<div class="card__text">
									<h4 class="card__subtitle">Программы накопления</h4>
									<h3 class="card__title"><a href="product.php">Безусловный доход</a></h3>
								</div>
								<img class="card__img" src="img/services/simple/2.png" alt="">
							</div>
						</div>
					</div>
					<div class="gray-text">
						<h2>Преимущества</h2>
						<ol>
							<li>Помогает решить вопрос регулярности внесения средств за счет формирования финансовой дисциплины</li>
							<li>Гарантия, что финансовая цель будет достигнута и в случае возникновения непредвиденных обстоятельств</li>
							<li>На всем сроке действия программы деньги защищены от имущественных споров.</li>
							<li>Ежегодный социальный налоговый вычет, до 13% дополнительного дохода</li>
						</ol>
					</div>
					<div class="info-block">
						<h2 class="info-block__title info-block__title--small">Как  выбрать программу</h2>
						<div class="info-block__body">
							<ul class="info-block__nav">
								<li>Классические</li>
								<li>С ежемесячными выплатами</li>
								<li class="active">С повышенной доходностью</li>
							</ul>
							<div class="info-block__tabs">
								<?for($i=0;$i<3;$i++):?>
									<div class="info-block__tab" <?= $i==2 ? 'style="display:block"' : '';?>>
										<div class="catalog-block">
											<div class="catalog-block__text">
												<h3 class="catalog-block__title">С повышенной доходностью</h3>											
												<p>С единовременным взносом и повышенной гарантированной доходностью подойдут, если хочется увеличить капитал и сберечь деньги от инфляции.</p>
											</div>
											<div class="box catalog-block__box">
												<div class="card card--small">
													<div class="card__text">
														<h4 class="card__subtitle">Программы накопления</h4>
														<h3 class="card__title"><a href="product.php">Мечты под защитой</a></h3>
													</div>
													<img class="card__img card__img--small" src="img/services/simple/0.png" alt="">
												</div>
												<div class="card card--small">
													<div class="card__text">
														<h4 class="card__subtitle">Программы накопления</h4>
														<h3 class="card__title"><a href="product.php">Золотой запас</a></h3>
													</div>
													<img class="card__img card__img--small" src="img/services/simple/1.png" alt="">
												</div>
											</div>
										</div>
									</div>
								<?endfor?>
							</div>
						</div>
					</div>
					<div class="text-block">
						<h2>Отличия от других инструментов накопления</h2>
						<p>На протяжении срока действия договора действует страховка, котораяобеспечивает финансовую защиту семьи от непредвиденных обстоятельств, связанных с жизнью и здоровьем кормильца. В случае потери трудоспособности клиентом страховая компания продолжит формировать накопления за него. В случае же ухода из жизни застрахованного – семья получит компенсацию, многократно превышающую сумму вложенных средств.</p>
					</div>
					<div class="faq-block">
						<h2 class="faq-block__title">Часто задаваемые вопросы по&nbsp;НСЖ</h2>
						<div class="accordion">
							<div class="accordion__body">
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__trigger"><span>Как считать доход в 2020 году в рамках расчета по 2-НДФЛ?</span></div>
									<div class="accordion__text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi consectetur maiores atque dolor est soluta quae mollitia officia fugiat?</p>
									</div>
								</div>
							</div>
							<button class="btn btn--medium-large accordion__btn">Показать еще (5)</button>
						</div>						
					</div>
				</div>
				<aside class="sidebar-page__sidebar sidebar">
					<div class="sidebar__inner">
						<ul class="menu-widget">
							<li class="active"><a href="">Программы накопления</a></li>
							<li><a href="javascript:;">Программы поддержки</a></li>
							<li><a href="javascript:;">Программы инвестирования</a></li>
							<li><a href="javascript:;">Программы здоровья</a></li>
						</ul>
						<div class="contact-widget">
							<div class="contact-widget__text">
								<h3 class="contact-widget__title">Нужна помощь?</h3>
								<p>Посетите <a href="javascript:;">ближайший офис</a> или обратитесь онлайн к нашему специалисту</p>
							</div>
							<a href="javascript:;" class="btn btn--white btn--medium-large btn--block"><i class="icon-comment btn__icon"></i> Написать сообщение</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</main>
<? include "footer.php";?>	