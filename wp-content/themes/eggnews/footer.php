<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Egg
 * @subpackage Eggnews
 * @since 1.0.0
 */

?>
		</div><!--.teg-container-->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<?php get_sidebar( 'footer' ); ?>
			<div id="bottom-footer" class="sub-footer-wrapper clearfix">
				<div class="teg-container">
					<div class="site-info">
						<span class="copy-info"><?php echo esc_html( get_theme_mod( 'eggnews_copyright_text', esc_html__( 'SGG', 'eggnews' ) ) ); ?></span>
						<span class="sep"> | </span>
						<?php
							$eggnews_theme_author = esc_url( 'sgg.carabobo.gob.ve' );
						/* translators: %s: theme author */
							printf( esc_html__( '%1$s.', 'SGG' ), '<a href="'.$eggnews_theme_author.'" >Secretaría General</a>' );
						?>
					</div><!-- .site-info -->
					<nav id="footer-navigation" class="sub-footer-navigation" >
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'footer-menu', 'fallback_cb' => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>
					</nav>
				</div>
			</div><!-- .sub-footer-wrapper -->
	</footer><!-- #colophon -->
	<div id="teg-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
