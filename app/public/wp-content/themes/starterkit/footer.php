<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starterkit
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-footer__main">
		<div class="row">

		</div>
	</div>
	<div class="site-footer__fineprint">
		<div class="row">
			<div class="site-footer__fineprint__item col-xs-12 col-md-6">
				<small>
					<?php
					echo get_bloginfo('name') . ' ';
					if(date('Y') > 2022) {
						echo '2022-';
					}
					echo date('Y') . '.';
					?>
					Placeholder images from
					<a href="https://place-hold.it/" target="_blank">Placehold.it</a>,
					<a href="https://placekitten.com/" target="_blank">Placekitten</a>, and
					<a href="https://place-puppy.com/" target="_blank">Placepuppy</a>.
				</small>
			</div>
			<div class="site-footer__fineprint__item col-xs-12 col-md-6">
				<small>Website by <a href="https://www.doubleedesign.com.au" target="_blank">Double-E Design</a>.</small>
			</div>
		</div>
	</div>
</footer>
</div>

<div class="site-overlay"></div>

<?php wp_footer(); ?>

</body>
</html>
