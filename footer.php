<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BSDCommerce
 */

?>

				</div><!-- #content -->
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php for($i = 1; $i < 5; $i++) : ?>
						<div class="col-lg-3">
							<?php 
							if(is_active_sidebar('footer-widget-' . $i )) {
								dynamic_sidebar( 'footer-widget-' . $i );
							}
							?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>Copyright &copy; 2019, All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
