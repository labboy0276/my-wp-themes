<?php
/**
 * Footer Template Part
 *
 * @package The Landscaper Child
 */
?>

<footer class="footer">

	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="bottom-left">
						<p><?php echo wp_kses_post( get_theme_mod( 'qt_footerbottom_textleft' ) ); ?></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="bottom-middle">
						<p><?php echo wp_kses_post( get_theme_mod( 'qt_footerbottom_textmiddle' ) ); ?></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="bottom-right">
						<p><?php echo wp_kses_post( get_theme_mod( 'qt_footerbottom_textright' ) ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if ( 'hide' !== get_theme_mod( 'qt_scroll_to_top_button', 'show' ) ) : ?>
		<a class="scrollToTop" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	<?php endif; ?>

</footer>

</div><!-- end layout boxed wrapper -->

<?php wp_footer(); ?>
</body>
</html>
