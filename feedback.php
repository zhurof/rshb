<? include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__inner">
					<li><a href="/">Главная страница</a></li>
					<li>Форма обратной связи</li>
				</ul>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper sidebar-page__wrapper">
				<div class="sidebar-page__main">
					<div class="page-head">
						<h1 class="page-head__title">Форма обратной связи</h1>
					</div>
					<div class="feedback">
						<ul class="feedback__nav">
							<li class="active">Задать вопрос</li>
							<li>Качество обслуживания</li>
							<li>Направить предложение</li>
						</ul>
						<div class="feedback__body">
							<form action="" class="feedback__tab" style="display:block">
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">1. Тема обращения</h3>
									<div class="select" tabindex="0">
										<select class="select__input" tabindex="-1">
											<option selected disabled>Выберите из списка</option>
											<option>Тема 1</option>
											<option>Тема 2</option>
										</select>
										<div class="select__output">Выберите из списка</div>
										<ul class="select__list">
											<li>Тема 1</li>
											<li>Тема 2</li>
										</ul>
									</div>
								</div>
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">2. Личные данные</h3>
									<input type="text" placeholder="Фамилия Имя Отчество">
									<input type="text" placeholder="Город обслуживания*" required>
									<input type="tel" placeholder="Телефон*" required>
									<input type="email" placeholder="Электронная почта*" required>								
								</div>
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">3. Текст обращения</h3>
									<textarea rows="6" placeholder="При наличии укажите номер договора"></textarea>
									<label class="file-field">
										<input type="file" class="file-field__input" />
										<span class="file-field__title"><i class="icon-paperclip"></i> Прикрепить файлы (png, jpg)</span>
										<span class="file-field__text">Вы можете прикрепить файлы формата doc, docx, png, jpg, pdf, txt размером не&nbsp;более 20Мб</span>
									</label>
								</div>
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">4. Согласие на обработку персональных данных</h3>
									<label class="option feedback__option">
										<input type="checkbox" required checked />
										<span>Согласен на <a href="javascript:;">обработку персональных данных</a> *</span>
									</label>
								</div>
								<button class="btn btn--big btn--green feedback__btn">Отправить</button>
								<div class="feedback__note">* Обязательные поля</div>
							</form>
							<form action="" class="feedback__tab">
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">1. Текст обращения</h3>
									<textarea rows="6" placeholder="При наличии укажите номер договора"></textarea>
								</div>
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">2. Согласие на обработку персональных данных</h3>
									<label class="option">
										<input type="checkbox" required checked />
										<span>Согласен на <a href="javascript:;">обработку персональных данных</a> *</span>
									</label>
								</div>
								<button class="btn btn--big btn--green feedback__btn">Отправить</button>
								<div class="feedback__note">* Обязательные поля</div>
							</form>
							<form action="" class="feedback__tab">
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">1. Текст обращения</h3>
									<textarea rows="6" placeholder="При наличии укажите номер договора"></textarea>
								</div>
								<div class="feedback__fieldset">
									<h3 class="feedback__legend">2. Согласие на обработку персональных данных</h3>
									<label class="option">
										<input type="checkbox" required checked />
										<span>Согласен на <a href="javascript:;">обработку персональных данных</a> *</span>
									</label>
								</div>
								<button class="btn btn--big btn--green feedback__btn">Отправить</button>
								<div class="feedback__note">* Обязательные поля</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	