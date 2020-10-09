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
					<div class="management">
						<div class="management__text">
							<p>Reprehenderit in voluptate velit esse cillum dolore sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="box management__box">
							<?for($i=0;$i<8;$i++):?>
								<div class="person-card" data-fancybox data-src="#person">
									<div class="person-card__pic">
										<img src="img/team/<?=$i;?>.jpg" alt="">
									</div>
									<div class="person-card__text">
										<h3 class="person-card__title">Жук Анастасия</h3>
										<p>Генеральный директор</p>
									</div>
								</div>
							<?endfor?>
						</div>
					</div>
				</div>
				<? include "aside.php"; ?>
			</div>
		</div>
		<div class="person" id="person">
			<div class="person__inner">
				<img src="img/team/0.jpg" alt="" class="person__img">
				<div class="person__text">
					<div class="person__head">
						<h3 class="person__title">Андрей Александрович Чуйко</h3>
						<div class="person__position">Генеральный директор</div>
					</div>
					<div class="person__body">
						<h4>Зона ответственности</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, urna consequat felis vehicula class ultricies mollis dictumst, aenean non a in donec nulla. Phasellus ante pellentesque erat cum risus consequat imperdiet aliquam, integer placerat et turpis mi eros nec lobortis taciti, vehicula nisl litora tellus ligula porttitor metus. </p>
						<h4>Краткое резюме</h4>
						<p>В 2001-м с отличием завершил обучение в Московском государственном техническом университете имени Н. Э. Баумана. Обучался на факультете «Инженерный бизнес и менеджмент» по специальности «автоматизированные банковские системы и технологии».
						</p>
						<h4>Хобби / увлечения</h4>
						<div class="infographics infographics--small">
							<div class="box infographics__box infographics__box--small">
								<?for($i=0;$i<4;$i++):?>
									<div class="infographics__item infographics__item--small">
										<div class="infographics__item-pic infographics__item-pic--small">
											<img src="img/icons/umbrella.svg" alt="">
										</div>
										<div class="infographics__item-text">
											<p>Phasellus ante pellentesque</p>
										</div>
									</div>
								<?endfor;?>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, urna consequat felis vehicula class ultricies mollis dictumst, aenean non a in donec nulla.</p>
						<h4>Социальные сети и пресса</h4>
						<p>
							<a href="javascript:;" target="_blank">Finparty</a> &nbsp;&nbsp;
							<a href="javascript:;" target="_blank">Tadviser</a> &nbsp;&nbsp;
							<a href="javascript:;" target="_blank">Facebook</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	