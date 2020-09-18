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
								<div class="person-card">
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
	</main>
<? include "footer.php";?>	