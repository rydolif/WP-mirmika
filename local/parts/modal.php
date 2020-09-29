	<div class="modal modal--order">
		<form action="sendmail.php" class="modal__form form" method="post">

			<button class="close modal__close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2 class="modal__title">Оставьте заявку, <br>мы свяжемся с Вами</h2>
			<input type="hidden" name="subject" value="Оставьте заявку, мы свяжемся с Вами">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Имя" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="mail" name="mail" placeholder="Почта" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" placeholder="Телефон" class="modal__input" required>
			</div>
			<div class="modal__line">
				<textarea name="textarea" placeholder="Задайте нам свой вопрос" rows="5"></textarea>
			</div>
			<div class="modal__line">
				<button type="submit" class="modal__btn" name="submit">Отправить</button>
			</div>
		</form>
	</div>

	<div class="modal modal--consultation">
		<form action="sendmail.php" class="modal__form form" method="post">

			<button class="close modal__close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2 class="modal__title">Оставьте заявку на консультацию</h2>
			<input type="hidden" name="subject" value="Оставьте заявку на консультацию">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Имя" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="mail" name="mail" placeholder="Почта" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" placeholder="Телефон" class="modal__input" required>
			</div>
			<div class="modal__line">
				<textarea name="textarea" placeholder="Задайте нам свой вопрос" rows="5"></textarea>
			</div>
			<div class="modal__line">
				<button type="submit" class="modal__btn" name="submit">Отправить</button>
			</div>
		</form>
	</div>

	<div class="modal modal--investor">
		<form action="sendmail.php" class="modal__form form" method="post">

			<button class="close modal__close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2 class="modal__title">Предложение для инвесторов</h2>
			<input type="hidden" name="subject" value="Предложение для инвесторов">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Имя" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="mail" name="mail" placeholder="Почта" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" placeholder="Телефон" class="modal__input" required>
			</div>
			<div class="modal__line">
				<textarea name="textarea" placeholder="Задайте нам свой вопрос" rows="5"></textarea>
			</div>
			<div class="modal__line">
				<button type="submit" class="modal__btn" name="submit">Отправить</button>
			</div>
		</form>
	</div>

	<div class="modal modal--services">
		<form action="sendmail.php" class="modal__form form" method="post">

			<button class="close modal__close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2 class="modal__title">Оставьте заявку на <br>услугу</h2>
			<input type="hidden" name="subject" value="Оставьте заявку на услугу">

			<div class="modal__line">
				<input type="text" name="name" placeholder="Имя" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="mail" name="mail" placeholder="Почта" class="modal__input" required>
			</div>
			<div class="modal__line">
				<input type="tel" name="phone" placeholder="Телефон" class="modal__input" required>
			</div>
			<div class="modal__line">
				<textarea name="textarea" placeholder="Задайте нам свой вопрос" rows="5"></textarea>
			</div>
			<div class="modal__line">
				<button type="submit" class="modal__btn" name="submit">Отправить</button>
			</div>
		</form>
	</div>

	<div class="modal modal--thanks" id="thanks">
		<div class="modal__form">
			<button class="close modal__close" type="button">
				<span></span>
				<span></span>
			</button>
			<h2 class="modal__title">Спасибо. Заявка принята</h2>
			<p>В ближайшее время с Вами <br>свяжется наш специалист</p>
		</div>
	</div>