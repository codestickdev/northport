<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Northport
 */

?>

	<footer class="siteFooter">
		<div class="siteFooter__wrap container">
			<div class="siteFooter__logo">
				<img src="<?php echo get_template_directory_uri() . '/images/logo_new.svg'; ?>"/>
			</div>
			<div class="siteFooter__info">
				<a href="mailto:office@northport.net.pl" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_mail.svg'; ?>"/>
					<p>office@northport.net.pl</p>
				</a>
				<a href="https://bit.ly/3vefmqU" target="_blank" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_location.svg'; ?>"/>
					<h2>Biuro sprzedaży</h2>
					<p>ul. Św. Anny 2/U3<br>06-400 Ciechanów</p>
				</a>
				<a href="tel:+48534820720" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_phone.svg'; ?>"/>
					<p>+48 534 820 720</p>
				</a>
			</div>
		</div>
	</footer>
	<?php if(!current_user_can('administrator')): ?>
	<div class="loader loader--active">
		<img src="<?php echo get_template_directory_uri() . '/images/logo_new.svg'; ?>"/>
	</div>
	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
