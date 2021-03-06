<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<section class="hero">
		<div class="hero__slider swiper-container">

			<?php if( have_rows('hero') ): ?>
				<div class="swiper-wrapper">
				<?php while( have_rows('hero') ): the_row(); 
					$subtitle = get_sub_field('subtitle');
					$title = get_sub_field('title');
					$subtitle2 = get_sub_field('subtitle2');
					$img = get_sub_field('img');
				?>

				<div class="hero__slide swiper-slide" style="		background-image: url(<?php echo $img; ?>);">
					<div class="container">
						<p class="hero__subtitle"><?php echo $subtitle; ?></p>
						<h1 class="hero__title"><?php echo $title; ?></h1>
						<p class="hero__subtitle"><?php echo $subtitle2; ?></p>
						<a href="#" class="hero__btn btn consultation__open">Консультация</a>
					</div>
				</div>

				<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<div class="hero__pagination swiper-pagination"></div>
			<div class="hero__button hero__prev"></div>
			<div class="hero__button hero__next"></div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="about__container container">
			
			<div class="about__desc">
				<h2 class="about__title">О нашей компании</h2>
				<p class="about__text">
					Строительная компания полного цикла. Это значит, что наши специалисты могут 
					взяться за возведение Вашего здания или сооружения с нулевого цикла до сдачи 
					объекта в эксплуатацию.  Подключиться на любой стадии строительства, возвести 
					конкретные конструктивные элементы, инженерные сети. Не исключение ремонтные 
					работы помещений в компании с талантливыми дизайнерами. 
				</p>
				<p class="about__text">
					Много договоров заключены на текущие ремонты общедомового имущества. 
					Плотно сотрудничаем с управляющими компаниями города. Помогаем жильцам 
					многоквартирных жилых домов организовать  ремонтные и  монтажные  работы. 
					Не все знают как воспользоваться своими  деньгами, хранящимися на счетах управляющих 
					компаний. Все расскажем и научим.  Нам доверяют.
				</p>
				<p class="about__text">
					Опыт наших квалифицированных инженеров-строителей, юристов, снабженцев, 
					менеджеров, владение современными технологиями строительства и ремонта 
					позволяют нам предоставлять услуги действительно качественно. А благодаря 
					тесному партнерству с поставщиками строительных материалов мы предлагаем 
					доступную стоимость, ниже среднерыночной в Приморском крае.
				</p>
			</div>

			<div class="about__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/about__img.png" alt="">
			</div>

		</div>
	</section>

	<section class="services" id="services">
		<div class="services__container container">

			<h2 class="services__title">Наши усуги</h2>
			<p class="services__subtitle">
				Заказывая комплекс работ в одном месте, Вы получаете гарантию качества и привлекательную <br>
				стоимость. В строительном сегменте, мы предоставляем исчерпывающий перечень услуг, начиная с <br>
				подготовки строительства и заканчивая 
				вводом объекта в эксплуатацию:
			</p>

			<div class="services__wrap">

				<div class="services__wrap_list">
					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon1.svg" alt="">
						<p>Строительство домов в формате «под ключ».</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon2.svg" alt="">
						<p>Коттеджное строительство</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon3.svg" alt="">
						<p>Ремонт общедомового имущества жилых <br> многоквартирных домов</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon4.svg" alt="">
						<p>Устройство  железобетонных конструкций</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon5.svg" alt="">
						<p>Кровля (рулонная, черепица)</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon6.svg" alt="">
						<p>Фундаменты любой сложности (свайные, плиты, <br> стены в грунте; ленточные и.т.д)</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon7.svg" alt="">
						<p>Утепление фасадов</p>
					</div>
				</div>

				<div class="services__wrap_list">
					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon8.svg" alt="">
						<p>Монтаж сэндвич-панелей. Строительство <br> складов в формате «под ключ»</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon9.svg" alt="">
						<p>Кладка любой сложности</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon10.svg" alt="">
						<p>Наружные сети. Водопровод, канализация <br> кабельные линии 6кВ, 0,4кВ;</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon11.svg" alt="">
						<p>Ремонт любой сложности в компании <br> с талантливыми дизайнерами</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon12.svg" alt="">
						<p>Электромонтажные работы</p>
					</div>

					<div class="services__wrap_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/services__icon13.svg" alt="">
						<p>Другие работы</p>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section class="engineering" id="engineering">
		<div class="container">

			<h2 class="engineering__title">Наши инжиниринговые услуги</h2>

			<div class="engineering__list">
				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon1.svg" alt="">
					<p>Поиск участка <br>под строительство</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon2.svg" alt="">
					<p>
						Подготовка и согласование 
						<br>проектов планировки терр. 
						<br>(ППТ) и проектов межевания 
						<br>территории (ПМТ);
					</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon3.svg" alt="">
					<p>Определение границ <br>земляных участков</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon4.svg" alt="">
					<p>Проектирование</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon1.svg" alt="">
					<p>Получ. разрешения <br>на строительство</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon2.svg" alt="">
					<p>Получение технических <br>условий</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon3.svg" alt="">
					<p>Ввод объекта <br>в эксплуатацию и др</p>
				</div>

				<div class="engineering__list_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/engineering__icon4.svg" alt="">
					<p>Консультирование</p>
				</div>
			</div>

			<div class="engineering__slider">

				<div class="engineering__slider_nav">
					<div class="engineering__slider_pagination"></div>
					<div class="engineering__slider_button engineering__slider_prev"></div>
					<div class="engineering__slider_button engineering__slider_next"></div>
				</div>

				
				<?php if( have_rows('engineering') ): ?>
					<div class="swiper-wrapper">
					<?php while( have_rows('engineering') ): the_row(); 
						$img = get_sub_field('img');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
					?>

					<div class="engineering__slider_slide swiper-slide">
						<div class="engineering__slider_img">
							<img src="<?php echo $img; ?>" alt="">
						</div>
						<h3 class="engineering__slider_title"><?php echo $title; ?></h3>
						<p class="engineering__slider_desc">
							<?php echo $text; ?>
						</p>
						<a href="#" class="engineering__slider_modal services__open">Заказать услугу</a>
					</div>

					<?php endwhile; ?>
					</div>
				<?php endif; ?>

				</div>
			</div>

		</div>
	</section>

	<section class="consultation">
		<div class="container">
			<h2 class="consultation__title">
				Позвоните прямо сейчас и получите консультацию эксперта абсолютно бесплатно
			</h2>
			<p class="consultation__desc">Либо пришли нам свой вопрос на WhatsApp</p>
			<a href="#" class="consultation__btn consultation__open">Консультация</a>
		</div>
	</section>

	<section class="investor">
		<div class="investor__container container">

			<div class="investor__content">
				<h2 class="investor__title">Предложение <br>для <b>инвесторов</b></h2>
				<p class="investor__desc">Мы строим - вы зарабатываете</p>
				<a href="#" class="investor__btn investor__open">Подробнее</a>
			</div>

			<div class="investor__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/investor__img.png" alt="">
			</div>
		</div>
	</section>

	<section class="step" id="step">
		<div class="container">

			<h2 class="step__title">Дом мечты за 8 шагов</h2>
			<p class="step__desc">
				От дома мечты, Вас отделяют всего несколько шагов. Мы берёмся за объекты любой сложности и на 
				<br>любой стадии. Обращаясь к нам, Вы доверяете ведущим экспертам с богатым опытом работы. И 
				<br>множество довольных клиентов – лучшее подтверждение нашей компетентности. 
			</p>

			<div class="step__list">
				<div class="step__list_item">
					<div class="step__list_number">01</div>
					<h3 class="step__list_title">Консультация экспертов</h3>
					<p class="step__list_text">
						Мы не предлагаем типовых решений, а находим оптимальную конструкцию зданий, 
						в зависимости от Вашего бюджета и целей.
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">02</div>
					<h3 class="step__list_title">Составление сметы</h3>
					<p class="step__list_text">
						Тщательно проработаем и согласуем каждый пункт сметы, точно определив 
						Ваши затраты, а также обязательства нашей компании
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">03</div>
					<h3 class="step__list_title">Заключение договора</h3>
					<p class="step__list_text">
						Наша команда работает официально, чтобы предоставлять своим клиентам 
						полный спектр надлежащих гарантий. Подпишем на месте.
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">04</div>
					<h3 class="step__list_title">Проектная документация</h3>
					<p class="step__list_text">
						При необходимости, проконтролируем внесение изменений, работая в тесном 
						сотрудничестве с проектной организацией.
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">05</div>
					<h3 class="step__list_title">Выезд эксперта</h3>
					<p class="step__list_text">
						Наши юристы оформят необходимые разрешительные документы, 
						технические условия, сопроводят и проконсультируют
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">06</div>
					<h3 class="step__list_title">Закупка материалов</h3>
					<p class="step__list_text">
						Специалисты отдела снабжения проведут мониторинг цен, сформируют конъюнктурный анализ. 
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">07</div>
					<h3 class="step__list_title">Строительные работы</h3>
					<p class="step__list_text">
						Наши бригады приступают к работе на объекте, согласно разработанному календарному плану, учитывая Ваши пожелания и нормативы
					</p>
				</div>

				<div class="step__list_item">
					<div class="step__list_number">08</div>
					<h3 class="step__list_title">Сдача объекта</h3>
					<p class="step__list_text">
						Готовим всю необходимую исполнительную документацию. Сдаем объект заказчику
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="house">
		<div class="container">
			<h2 class="house__title">
				От дома мечты Вас отделяют всего несколько шагов. 
			</h2>
			<p class="house__desc">
				Мы берёмся за объекты любой сложности и на любой стадии. Обращаясь к нам, Вы доверяете ведущим экспертам 
				<br>с богатым опытом работы. И множество довольных клиентов – лучшее подтверждение нашей компетентности.
				<br>За качество отвечаем своей репутацией. И все клиенты остаются довольны. Без исключений
			</p>
			<a href="#" class="house__btn consultation__open">Консультация</a>
		</div>
	</section>

	<section class="advantages" id="advantages">
		<div class="container">

			<h2 class="advantages__title">6 главных преимуществ которые <br> <b>вы получите</b></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/advantages__img.jpg" alt="" class="advantages__img">

			<div class="advantages__list">
				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Полный комплекс</h3>
					<p class="advantages__list_text">
						Полный комплекс проектных, строительных, ремонтных и инженерных работ в одном месте у нас в компании
					</p>
				</div>

				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Широкий спектр услуг</h3>
					<p class="advantages__list_text">
						Широкий спектр инжиниринговых услуг. Подберем участок для строительства,
						оформим все необходимые документы. Проконсультируем.
					</p>
				</div>

				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Квалифицированные спецы</h3>
					<p class="advantages__list_text">
						Квалифицированных специалистов с профильным высшим образованием и достаточным опытом;
					</p>
				</div>

				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Выгодные цены</h3>
					<p class="advantages__list_text">
						Наши цены почти на 20% ниже среднерыночной стоимости, с лояльной скидкой для постоянных клиентов;
					</p>
				</div>

				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Никаких наценок</h3>
					<p class="advantages__list_text">
						Никаких наценок и скрытых платежей: платите только за результат и столько, сколько указано в договоре;
					</p>
				</div>

				<div class="advantages__list_item">
					<h3 class="advantages__list_title">Опыт сотрудничества</h3>
					<p class="advantages__list_text">
						Имеем опыт сотрудничества с управляющими компаниями МКД в сфере текущего ремонта, а также многое другое.
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="consultation">
		<div class="container">
			<h2 class="consultation__title">
				Получите бесплатную консультацию
			</h2>
			<p class="consultation__desc">
				Эксперты Компании МИРМИКА ответят на любые вопросы и составят для Вас <br>индивидуальную смету.
			</p>
			<form action="sendmail.php" class="form consultation__form">
				<input type="hidden" name="subject" value="Получите бесплатную консультацию">
				<p>
					<input type="tel" name="phone" placeholder="+7 900 000 00 00" required>
				</p>
				<p>
					<button class="consultation__form_button">Консультация</button>
				</p>
			</form>
		</div>
	</section>

	<section class="smart">
		<div class="smart__container container">

			<div class="smart__content">
				<h2 class="smart__content_title">Умный и компетентный подход</h2>
				<p class="smart__content_text">
					Пока другие зарабатывают деньги – мы работаем на репутацию. Именно 
					поэтому наше предложение устроит любого, кто захочет улучшить свои 
					жилищные условия. Хороший дом начинается с вопросов.
				</p>
				<p class="smart__content_text">
					И у нашей команды есть ответы, которые Вам понравятся. Качество кроется 
					в деталях, поэтому мы добиваемся эталонных результатов на каждом этапе 
					работ. Свяжитесь с нами прямо сейчас, и получите консультацию лучшего 
					специалиста компании совершенно бесплатно. Спешите, наши цены временно 
					снижены.
				</p>
				<a href="#" class="smart__content_btn consultation__open">Консультация</a>
			</div>

			<div class="smart__list">
				<div class="smart__list_item">
					<p>Какую технологию строительства использовать?</p>
				</div>
				<div class="smart__list_item">
					<p>Какая планировка лучше?</p>
				</div>
				<div class="smart__list_item">
					<p>Как грамотно провести коммуникации?</p>
				</div>
				<div class="smart__list_item">
					<p>Как построить объект в соответствии со всеми нормативными актами?</p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>