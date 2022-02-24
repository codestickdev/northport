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
				<a href="mailto:office@montecarlo.com.pl" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_mail.svg'; ?>"/>
					<p>office@montecarlo.com.pl</p>
				</a>
				<a href="https://bit.ly/3vefmqU" target="_blank" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_location.svg'; ?>"/>
					<h2>Biuro sprzedaży</h2>
					<p>ul. Mińska 25C/U5<br>03-808 Warszawa</p>
				</a>
				<a href="tel:+48508913789" class="siteFooter__icon">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/footer_phone.svg'; ?>"/>
					<p>+48 508 913 789</p>
				</a>
			</div>
		</div>
	</footer>
	<div class="loader loader--active">
		<img src="<?php echo get_template_directory_uri() . '/images/logo_new.svg'; ?>"/>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
