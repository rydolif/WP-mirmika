	
	<?php get_template_part( 'parts/footer' ); ?>

	<?php get_template_part( 'parts/modal' ); ?>

	<?php wp_footer(); ?>

	<script>
		jQuery(document).ready(function($) {
			
			$('input[type="tel"]').mask('+0 (000) 000-00-00');

			jQuery.validator.addMethod("phoneno", function(phone_number, element) {
				return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
			}, "Введите Ваш телефон");
				
			$(".form").each(function(index, el) {
				$(el).addClass('form-' + index);
		
				$('.form-' + index).validate({
					rules: {
						phone: {
							required: true,
							phoneno: true
						},
						name: 'required',
					},
					messages: {
						name: "Введите Ваше имя",
						mail: "Введите Вашу почту",
						phone: "Введите Ваш телефон",
					},
					submitHandler: function(form) {
						var t = {
							name: jQuery('.form-' + index).find("input[name=name]").val(),
							mail: jQuery('.form-' + index).find("input[name=mail]").val(),
							phone: jQuery('.form-' + index).find("input[name=phone]").val(),
							textarea: jQuery('.form-' + index).find("textarea[name=textarea]").val(),
							subject: jQuery('.form-' + index).find("input[name=subject]").val()
						};
						ajaxSend('.form-' + index, t);
					}
				});
		
			});
		
			function ajaxSend(formName, data) {
				jQuery.ajax({
					type: "POST",
					url: "/wp-content/themes/local/sendmail.php",
					data: data,
					success: function() {
						let test = document.querySelectorAll('.modal');
						test.forEach(element => {
							element.style.display = 'none';
						});
						document.querySelector('#thanks').style.display = 'flex';
						setTimeout(function() {
							$(formName).trigger('reset');
						}, 2000);
					}
				});
			}
		});
	</script>
</body>
</html>
