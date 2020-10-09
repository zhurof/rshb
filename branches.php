<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li>Где купить</li>
				</ul>
			</div>
		</div>
		<div class="page-head">
			<div class="wrapper">
				<h1 class="page-head__title">Где купить</h1>
			</div>
		</div>
		<div class="branches">
			<div class="wrapper">
				<div class="branches__head">
					<ul class="branches__nav">
						<li class="active">На карте</li>
						<li>Списком</li>
					</ul>
					<form action="" class="search-form branches__search">
						<div class="search-form__inner">
							<input type="search" class="search-form__input" placeholder="Поиск по названию населенного пункта" required />
							<i class="icon-close search-form__clear-btn"></i>
							<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
						</div>					
					</form>
					<form action="" class="branches__filter">
						<div class="select branches__filter-field" tabindex="0">
							<select name="products[]" class="select__input" tabindex="-1" multiple>
								<option>Программы инвестирования</option>
								<option>Программы накопления</option>
								<option>Пенсия+</option>
								<option>Программы защиты от критических заболеваний</option>
							</select>
							<div class="select__output" data-placeholder="Продукты доступные к оформлению"></div>
							<ul class="select__list select__list--multiple">
								<li>Программы инвестирования</li>
								<li>Программы накопления</li>
								<li>Пенсия+</li>
								<li>Программы защиты от критических заболеваний</li>
							</ul>
						</div>
						<div class="select branches__filter-field" tabindex="0">
							<select name="sale_place[]" class="select__input" tabindex="-1" multiple>
								<option>Россельхозбанк</option>
								<option>Другой банк</option>
								<option>Страховая компания</option>
								<option>Страховой агент</option>
							</select>
							<div class="select__output" data-placeholder="Тип точки продаж"></div>
							<ul class="select__list select__list--multiple">
								<li>Россельхозбанк</li>
								<li>Другой банк</li>
								<li>Страховая компания</li>
								<li>Страховой агент</li>
							</ul>
						</div>
					</form>
				</div>
				<div class="branches__body">
					<div class="branches__tab" style="display:block">
						<div class="branches__map" id="map"></div>
					</div>
					<div class="branches__tab">
						<div class="box branches__box">
							<?for($i=0;$i<14;$i++):?>
								<div class="branch-card">
									<div class="branch-card__head">
										<h3 class="branch-card__title">РСХБ Марьино</h3>
										<p>пн-вт: 09:30-20:00</p>
										<p>сб: 09:00-15:00</p>
										<p>вс: выходной</p>
									</div>
									<div class="branch-card__body">
										<p>Братиславская ул., 16, корп. 1</p>
										<p>Тел.: <a href="tel:+74956440225">+7 (495) 644-02-25</a></p>
									</div>
								</div>
							<?endfor;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script type="application/json" id="map-data">
		{
			"type": "FeatureCollection",
			"features": [
				{
					"type": "Feature",
					"id": 0,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.649831, 37.705491]
					},
					"properties": {
						"hintContent": "РСХБ Марьино",
						"balloonContentHeader": "РСХБ Марьино",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Марьино</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				},{
					"type": "Feature",
					"id": 1,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.664649, 37.561347]
					},
					"properties": {
						"hintContent": "РСХБ Черемушки",
						"balloonContentHeader": "РСХБ Черемушки",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Черемушки</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				},{
					"type": "Feature",
					"id": 2,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.742610, 37.398482]
					},
					"properties": {
						"hintContent": "РСХБ Кунцево",
						"balloonContentHeader": "РСХБ Кунцево",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Кунцево</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				},{
					"type": "Feature",
					"id": 3,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.650116, 37.698675]
					},
					"properties": {
						"hintContent": "РСХБ Курьяново",
						"balloonContentHeader": "РСХБ Курьяново",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Курьяново</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				},{
					"type": "Feature",
					"id": 4,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.753635, 37.704817]
					},
					"properties": {
						"hintContent": "РСХБ Лефортово",
						"balloonContentHeader": "РСХБ Лефортово",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Некрасовка</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				},{
					"type": "Feature",
					"id": 5,
					"geometry": {
						"type": "Point", 
						"coordinates": [55.882156, 37.491961]
					},
					"properties": {
						"hintContent": "РСХБ Бусинова",
						"balloonContentHeader": "РСХБ Бусинова",
						"balloonContentBody": "<div class='custom-baloon'><div class='custom-baloon__head'><h4 class='custom-baloon__title'>РСХБ Бусинова</h4><p>Братиславская ул., 16, корп. 1</p><p>Тел.: <a href='tel:+74956440225'>+7 (495) 644-02-25</a></p></div><div class='custom-baloon__body'><p>пн-вт: 09:30-20:00</p><p>сб: 09:00-15:00</p><p>вс: выходной</p></div></div>"
					}
				}
			]
		}
	</script>
	<!-- api карт грузим только там, где надо. Для производительности -->
	<script  src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&#038;ver=1"></script>
<? include "footer.php";?>	