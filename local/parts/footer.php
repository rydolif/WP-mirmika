

<footer class="footer">
	<div class="footer__container container">

		<div class="footer__col">
			<h3 class="footer__title">Наш адрес</h3>
			<p><?php the_field('place'); ?></p>
			<p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
			<?php if( have_rows('phone') ): ?>
				<?php while( have_rows('phone') ): the_row(); 
					$phone = get_sub_field('phone');
					$phone_link = get_sub_field('phone_link');
				?>
					<p><a href="tel:<?php echo $phone_link; ?>"><?php echo $phone; ?></a></p>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="footer__col">
			<h3 class="footer__title">Навигация </h3>
			<div class="footer__nav">
				<ul>
					<li><a href="#about">О компании</a></li>
					<li><a href="#services">Наши услуги</a></li>
				</ul>
			</div>
		</div>

		<div class="footer__col">
			<h3 class="footer__title">Информация</h3>
			<div class="footer__nav">
				<ul>
					<li><a href="#engineering">Наши инжиринговые услуги</a></li>
					<li><a href="#advantages">Преимущества</a></li>
				</ul>
			</div>
		</div>

		<div class="footer__col">
			<h3 class="footer__title">Время работы</h3>
			<?php if( have_rows('time') ): ?>
				<?php while( have_rows('time') ): the_row(); 
					$text = get_sub_field('text');
					$time = get_sub_field('time');
				?>
					<p>
						<span><?php echo $text; ?></span>
						<span><?php echo $time; ?></span>
					</p>
				<?php endwhile; ?>
			<?php endif; ?>

			<p class="footer__soc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/footer__in.svg" alt=""> <a href="#" target="_blank">instagram</a></p>
		</div>

	</div>

	<div class="footer__copy">
		<a href="#" class="footer__copy_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dest/footer__logo.png" alt=""></a>
		<p class="footer__copy_info">© 2020. Разработано компанией <br>Topsense</p>
	</div>
</footer>
