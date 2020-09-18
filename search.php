<? include "header.php";?>		
	<main>
		<div class="page-head page-head--gray">
			<div class="breadcrumbs">
				<div class="wrapper">
					<ul class="breadcrumbs__inner">
						<li><a href="/">Главная страница</a></li>
						<li>Поиск по сайту</li>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<h1 class="page-head__title">Поиск по сайту</h1>
				<form action="" class="search-form page-head__search">
					<div class="search-form__inner">
						<input type="search" class="search-form__input" placeholder="Поиск по сайту" value="НСЖ" required />
						<i class="icon-close search-form__clear-btn"></i>
						<button class="btn btn--medium btn--yellow search-form__btn"><i class="icon-magnify btn__icon"></i><span>Найти</span></button>
					</div>
					<input type="text" class="date-input search-form__date" data-min-view="months" data-view="months" data-date-format="MM yyyy" value="Январь 2020">
				</form>
			</div>
		</div>
		<div class="search">
			<div class="wrapper">
				<h2 class="search__title">Результаты поиска (45)</h2>
				<ul class="search__nav">
					<li class="active"><a href="javascript:;">Программы/Продукты</a></li>
					<li><a href="javascript:;">Новости/обзоры</a></li>
					<li><a href="javascript:;">Статьи/глоссарий</a></li>
					<li><a href="javascript:;">Другое</a></li>
				</ul>
				<div class="search__body">
					<div class="search__tab" style="display:block">
						<div class="search__docs">
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №2-<strong>НСЖ</strong> (действуют с 23.03.2020)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №1-<strong>НСЖ</strong> от 25.04.2019 (действуют с 25.04.2019)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
						</div>
						<div class="search__results">
							<?for($i=0;$i<4;$i++):?>
								<div class="search__result">
									<h3 class="search__result-title"><a href="post.php">Накопительное страхование жизни</a></h3>
									<p>Накопительное страхование жизни (<strong>НСЖ</strong>) позволяет накопить деньги на крупную покупку, обучение детей или прибавку к будущим доходам, не беспокоясь о том, что непредвиденные обстоятельства, связанные с жизнью и здоровьем, могут этому помешать.</p>
								</div>
							<?endfor?>
						</div>
					</div>
					<div class="search__tab">
						<div class="search__results">
							<?for($i=0;$i<10;$i++):?>
								<div class="search__result">
									<h3 class="search__result-title"><a href="post.php">Накопительное страхование жизни</a></h3>
									<p>Накопительное страхование жизни (<strong>НСЖ</strong>) позволяет накопить деньги на крупную покупку, обучение детей или прибавку к будущим доходам, не беспокоясь о том, что непредвиденные обстоятельства, связанные с жизнью и здоровьем, могут этому помешать.</p>
								</div>
							<?endfor?>
						</div>
					</div>
					<div class="search__tab">
						<div class="search__results">
							<?for($i=0;$i<7;$i++):?>
								<div class="search__result">
									<h3 class="search__result-title"><a href="post.php">Накопительное страхование жизни</a></h3>
									<p>Накопительное страхование жизни (<strong>НСЖ</strong>) позволяет накопить деньги на крупную покупку, обучение детей или прибавку к будущим доходам, не беспокоясь о том, что непредвиденные обстоятельства, связанные с жизнью и здоровьем, могут этому помешать.</p>
								</div>
							<?endfor?>
						</div>
					</div>
					<div class="search__tab">
						<div class="search__docs">
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №2-<strong>НСЖ</strong> (действуют с 23.03.2020)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
							<a href="document.pdf" class="file-link" target="_blank">
								<span class="file-link__title">Правила страхования жизни №1-<strong>НСЖ</strong> от 25.04.2019 (действуют с 25.04.2019)</span>
								<span class="file-link__info">(276 КB, 12 декабря 2019)</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	