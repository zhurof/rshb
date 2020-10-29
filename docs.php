<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li>Документы по страховым продуктам</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper sidebar-page__wrapper">
				<div class="sidebar-page__main">
					<div class="page-head">
						<h1 class="page-head__title">Документы по страховым продуктам</h1>
					</div>
					<div class="docs">
						<ul class="docs__nav">
							<li class="active"><a href="javascript:;">Актуальные документы</a></li>
							<li><a href="javascript:;">Архив</a></li>
						</ul>
						<form action="" class="search-form docs__search">
							<div class="search-form__inner">
								<input type="search" class="search-form__input" placeholder="Поиск по названию документа" required />
								<i class="icon-close search-form__clear-btn"></i>
								<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
							</div>					
						</form>
						<div class="docs__filter">
							<h3 class="docs__filter-title">Выберите раздел:</h3>
							<div class="select docs__filter-select" tabindex="0">
								<select class="select__input" tabindex="-1">
									<option>Накопительное страхование жизни (НСЖ)</option>
									<option>Пари Сен-Жермен (ПСЖ)</option>
									<option>Основы безопасности жизнедеятельности (ОБЖ)</option>
								</select>
								<div class="select__output">Накопительное страхование жизни (НСЖ)</div>
								<ul class="select__list">
									<li>Накопительное страхование жизни (НСЖ)</li>
									<li>Пари Сен-Жермен (ПСЖ)</li>
									<li>Основы безопасности жизнедеятельности (ОБЖ)</li>
								</ul>
							</div>
						</div>
						<div class="docs__body">
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №2-НСЖ (действуют с 23.03.2020)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.doc" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №1-РСЖ (действуют с 20.01.2020)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.xls" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №1-НСЖ от 25.04.2019 (действуют с 25.04.2019)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="img/account.jpg" class="file-link" target="_blank">
								<span class="file-link__title">Заявление на отказ от договора страхования после периода охлаждения</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="img/chair.png" class="file-link" target="_blank">
								<span class="file-link__title">Заявление на отказ от договора страхования в период охлаждения</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Заявление на страховую выплату по дожитию</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Заявление на страховую выплату по договору накопительного страхования жизни</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	