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
			<img src="<?php echo get_template_directory_uri() . '/images/logo_footer.png'; ?>" class="siteFooter__logo"/>
			<div class="siteFooter__image">
				<img src="<?php echo get_template_directory_uri() . '/images/logo_footer.png'; ?>" class="siteFooter__logo--mobile"/>
				<img src="<?php echo get_template_directory_uri() . '/images/footer_bg.png'; ?>" class="view"/>
			</div>
			<div class="siteFooter__info">
				<div class="wrap">
					<h2>Biuro sprzedaży</h2>
					<p>Zapraszamy do umówienia się na<br/>wizytę w naszym biurze sprzedaży</p>
					<p class="address">ul. Mińska 25C/U5<br>03-808 Warszawa</p>
					<a href="tel:+48508913789">+48 508 913 789</a>
					<div class="social">
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri() . '/images/social/social_ig_white.svg'; ?>"/>
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri() . '/images/social/social_fb_white.svg'; ?>"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="loader loader--active">
		<img src="<?php echo get_template_directory_uri() . '/images/logo_footer.png'; ?>"/>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
