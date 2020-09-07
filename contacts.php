<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li><a href="/">Компания</a></li>
					<li>Команда</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper sidebar-page__wrapper">
				<div class="sidebar-page__main">
					<div class="page-head">
						<h1 class="page-head__title">Команда</h1>
					</div>
					<div class="contacts">
						<div class="contacts__text">
							<div class="table-wrapper">
								<table>
									<tbody>
										<tr>
											<th width="100">Адрес</th>
											<td width="270">119034, г. Москва, Гагаринский переулок, дом 3 (ст.&nbsp;метро «Кропоткинская»)</td>
										</tr>
										<tr>
											<th>Телефон</th>
											<td><a href="tel:88005008778">8 800 500 87 78</a></td>
										</tr>
										<tr>
											<th>E-mail</th>
											<td><a href="mailto:info@rshbins-life.ru">info@rshbins-life.ru</a></td>
										</tr>
										<tr>
											<th>Время работы</th>
											<td>пн.-чт. 9.00-18.00&nbsp; &nbsp;пт. 9.00-16.45 <br>сб.-вс. выходной</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<form action="" class="search-form contacts__search">
							<div class="search-form__inner">
								<input type="search" class="search-form__input" placeholder="Найти офис" required />
								<i class="icon-close search-form__clear-btn"></i>
								<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
							</div>					
						</form>
						<div class="contacts__map" id="map"></div>
						<div class="contacts__footer">
							<button class="btn contacts__btn"><i class="icon-map-marker btn__icon btn__icon--gray"></i>Найти ближайщий офис</button>
						</div>
					</div>
				</div>
				<? include "aside.php"; ?>
			</div>
		</div>
	</main>
	<!-- api карт грузим только там, где надо. Для производительности -->
	<script  src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&#038;ver=1"></script>
<? include "footer.php";?>	