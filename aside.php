<aside class="sidebar-page__sidebar sidebar">
	<div class="sidebar__inner">
		<ul class="menu-widget">
			<li><a href="about.php">Общие сведения</a></li>
			<li><a href="property-structure.php">Структура собственности</a></li>
			<li><a href="management.php">Совет директоров</a></li>
			<li><a href="team.php">Команда</a></li>
			<li><a href="fatca.php">FATCA</a></li>
			<li><a href="contacts.php">Контакты</a></li>
		</ul>
		<script>
			//демонстрацонный скрипт присвоения класса активному пункту меню. Снести после реализации на backend
			document.querySelectorAll('.menu-widget a').forEach(function(el){
				if(el.href == location.href){
					el.parentElement.classList.add('active');
					el.href = "javascript:;"
				}
			})
		</script>
		<div class="contact-widget">
			<div class="contact-widget__text">
				<h3 class="contact-widget__title">Нужна помощь?</h3>
				<p>Посетите <a href="javascript:;">ближайший офис</a> или обратитесь онлайн к нашему специалисту</p>
			</div>
			<a href="#feedback" class="btn btn--white btn--medium-large btn--block" data-fancybox><i class="icon-comment btn__icon"></i> Написать сообщение</a>
		</div>
	</div>
</aside>