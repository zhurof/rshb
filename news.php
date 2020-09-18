<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li>Новости и обзоры</li>
				</ul>
			</div>
		</div>
		<div class="page-head">
			<div class="wrapper">
				<h1 class="page-head__title">Новости и обзоры</h1>
			</div>
		</div>
		<div class="news">
			<div class="wrapper">
				<ul class="news__nav">
					<li class="active"><a href="javascript:;">Общие новости</a></li>
					<li><a href="javascript:;">Обзоры стратегий</a></li>
					<li><a href="javascript:;">Статьи РСХБ-СЖ</a></li>
					<li><a href="javascript:;">Истории выплат</a></li>
				</ul>
				<form action="" class="search-form news__search">
					<div class="search-form__inner">
						<input type="search" class="search-form__input" placeholder="Поиск по публикациям" required />
						<i class="icon-close search-form__clear-btn"></i>
						<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
					</div>
					<div class="select search-form__select" tabindex="0">
						<select class="select__input" tabindex="-1">
							<option>2020</option>
							<option>2019</option>
							<option>2018</option>
						</select>
						<div class="select__output">2020</div>
						<ul class="select__list">
							<li>2020</li>
							<li>2019</li>
							<li>2018</li>
						</ul>
					</div>
				</form>
				<div class="box news__box">
					<?for($i=0;$i<15;$i++):?>
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
				<div class="pagination news__pagination">
					<a href="javascript:;" class="icon-angle-left pagination__arrow"></a>
					<a href="javascript:;" class="pagination__item">1</a>
					<span  class="pagination__item pagination__item--active">2</span>
					<a href="javascript:;" class="pagination__item">3</a>
					<span class="pagination__item pagination__item--separator">...</span>
					<a href="javascript:;" class="pagination__item">75</a>					
					<a href="javascript:;" class="icon-angle-right pagination__arrow"></a>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	