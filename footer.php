	<footer class="footer">
		<div class="wrapper">
			<div class="box footer__box">
				<div class="footer__column footer__column--main">
					<div class="footer__mobile-column">
						<a href="/" class="logo footer__logo"><img src="img/logo-green.svg" alt=""></a>
						<div class="footer__phone">
							<a href="tel:88005008778" class="footer__phone-number">8 800 500 87 78</a>
							<div class="footer__phone-caption">Звонок по России бесплатный</div>
						</div>
						<div class="footer__address">119034, г. Москва, Гагаринский переулок, дом 3</div>
						<div class="footer__social">
							<a href="https://vk.com" class="soc-link fa-vk" target="_blank"></a>
							<a href="https://facebook.com" class="soc-link fa-facebook" target="_blank"></a>
							<a href="https://twitter.com" class="soc-link fa-twitter" target="_blank"></a>
						</div>
						<div class="footer__text">
							<p>Лицензия СЖ № 43 58 (вид деятельности: добровольное личное страхование, за исключением добровольного страхования жизни), выданы Банком России 19 января 2018 года без ограничения срока действия.</p>
						</div>
					</div>
					<div class="footer__mobile-column">
						<div class="footer__buttons">
							<a href="javascript:;" class="btn btn--image footer__btn"><img src="img/app-store.svg" alt=""></a>
							<a href="javascript:;" class="btn btn--image footer__btn"><img src="img/google-play.svg" alt=""></a>						
						</div>
						<ul class="footer__nav">
							<li><a href="sitemap.php">Карта сайта</a></li>
							<li><a href="javascript:;">Версия для слабовидящих</a></li>
							<li><a href="javascript:;">Пользовательское соглашение</a></li>
						</ul>
						<div class="footer__copyright">© 2020 ООО «РСХБ–Страхование жизни»</div>
					</div>
				</div>
				<div class="footer__column footer__column--big">
					<ul class="footer__menu">
						<li><a href="javascript:;">Информация для клиентов</a></li>
						<li><a href="javascript:;">FAQ</a></li>
						<li><a href="javascript:;">Налоговые вычеты</a></li>
						<li>
							<a href="docs.php">Документы по страховым продуктам</a>
							<ul>
								<li><a href="javascript:;">Инвестиционное страхование жизни</a></li>
								<li><a href="javascript:;">Накопительное страхование жизни</a></li>
								<li><a href="javascript:;">Медицинское страхование (страхование от критических заболеваний)</a></li>
								<li><a href="javascript:;">Страхование от несчастных случаев и болезней</a></li>
								<li><a href="javascript:;">Пенсионное страхование жизни</a></li>
								<li><a href="javascript:;">Страховые тарифы</a></li>
								<li><a href="javascript:;">Бланки заявлений</a></li>
								<li><a href="javascript:;">Заявление на отказ (cool-off)</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">Другая информация для клиентов</a>
							<ul>
								<li><a href="javascript:;">Базовый стандарт</a></li>
								<li><a href="javascript:;">Глоссарий</a></li>
								<li><a href="javascript:;">Информация о способах и адресах для направления обращений</a></li>
								<li><a href="javascript:;">Перечень случаев, когда ответ на обращение не дается</a></li>
								<li><a href="javascript:;">Информация о способах защиты прав получателей страховых услуг</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer__column">
					<ul class="footer__menu">
						<li>
							<a href="javascript:;">О компании</a>
							<ul>
								<li><a href="about.php">Общие сведения о компании</a></li>
								<li><a href="property-structure.php">Структура собственности</a></li>
								<li><a href="javascript:;">Миссия и ценности</a></li>
								<li><a href="javascript:;">Карьера в компании</a></li>
								<li><a href="management.php">Руководство</a></li>
								<li><a href="javascript:;">Партнерам</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">Важная информация</a>
							<ul>
								<li><a href="javascript:;">Правила страхования</a></li>
								<li><a href="javascript:;">Отчетность</a></li>
								<li><a href="javascript:;">Закупки</a></li>
								<li><a href="docs.php">Документы</a></li>
								<li><a href="javascript:;">Ссылки на проводимые тендеры на ЭТП</a></li>
								<li><a href="fatca.php">FATCA</a></li>
								<li><a href="javascript:;">Раскрытие информации</a></li>
								<li><a href="corruption.php">Противодействие коррупции</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="feedback" id="feedback">
		<h2 class="feedback__title">Форма обратной связи</h2>
		<ul class="feedback__nav">
			<li class="active">Задать вопрос</li>
			<li>Качество обслуживания</li>
			<li>Направить предложение</li>
		</ul>
		<div class="feedback__body">
			<?for($i=0;$i<3;$i++):?>
				<form action="" class="feedback__tab" <?=$i?'':'style="display:block"';?>>
					<div class="feedback__fieldset">
						<h3 class="feedback__legend">Тема обращения</h3>
						<div class="select" tabindex="0">
							<select class="select__input" tabindex="-1">
								<option selected disabled>Выберите из списка</option>
								<option>Накопительное страхование жизни</option>
								<option>Инвестиционное страхование жизни</option>
								<option>Программы здоровья</option>
							</select>
							<div class="select__output">Выберите из списка</div>
							<ul class="select__list">
								<li>Инвестиционное страхование жизни</li>
								<li>Инвестиционное страхование жизни</li>
								<li>Программы здоровья</li>
							</ul>
						</div>					
					</div>
					<div class="feedback__fieldset">
						<h3 class="feedback__legend">Текст обращения</h3>
						<textarea rows="6" placeholder="При наличии укажите номер договора"></textarea>
						<label class="file-field">
							<input type="file" class="file-field__input" />
							<span class="file-field__title"><i class="icon-paperclip"></i> Прикрепить файлы (png, jpg)</span>
							<span class="file-field__text">Вы можете прикрепить файлы формата doc, docx, png, jpg, pdf, txt размером не&nbsp;более 20Мб</span>
						</label>
					</div>
					<div class="feedback__fieldset">
						<h3 class="feedback__legend">Личные данные</h3>
						<input type="text" placeholder="Фамилия Имя Отчество*" required>
						<input type="text" placeholder="Номер договора">
						<input type="text" placeholder="Город обслуживания*" required>
						<input type="tel" placeholder="Телефон*" required>
						<input type="email" placeholder="Электронная почта*" required>								
						<div class="feedback__footer">
							<label class="option feedback__option">
								<input type="checkbox" required checked />
								<span>Согласен на <a href="javascript:;">обработку персональных данных</a> *</span>
							</label>
							<button class="btn btn--big btn--green feedback__btn">Отправить</button>
							<div class="feedback__note">* Обязательные поля</div>
						</div>
					</div>
				</form>
			<?endfor;?>
		</div>
	</div>
	
	<?if(!$_COOKIE['cookie-message']):?>
		<div class="cookies">
			<div class="wrapper cookies__wrapper">
				<img class="cookies__img" src="img/cookkie.png" alt="">
				<div class="cookies__text">Мы используем <a href="https://ru.wikipedia.org/wiki/Cookie" target="_blank">файлы cookie</a>, чтобы сайт работал лучше и быстрее</div>
				<span class="cookies__btn"><i class="icon-close"></i> Ок, закрыть</span>
			</div>
		</div>
	<?endif?>	
	
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="libs/counter/jquery.spincrement.min.js"></script>
	<script src="libs/ion-range-slider/ion.rangeSlider.min.js"></script>
	<script src="libs/air-datepicker/datepicker.min.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>