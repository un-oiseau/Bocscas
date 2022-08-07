</main>

<footer>
	<div class="cas-container">
		<div class="footer-logo flex-box">
			<?php dynamic_sidebar( 'footer_logo' ); ?>

			<form role="search" method="get" class="form-inline searchfield" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" class="form-input" value="<?php echo get_search_query(); ?>" name="s">
				<button type="submit" class="btn"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search" title="Search"></button>
			</form>
			<img class="cas-header-lfooter-lang" src="<?php echo get_template_directory_uri(); ?>/images/canada.svg" alt="Select language" title="Select language">
		</div>
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<ul class="footer-nav flex-box">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>



		<?php if ( has_nav_menu( 'footer_bottom' ) ) : ?>
			<ul class="footer-bootom-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_bottom',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>

		<p class ="copyright">Copyright © <?php echo date('Y'); ?> Casinobox.at<br>All Rights Reserved.</p>

	</div>
</footer>

<img id="to-top" src="<?php echo get_template_directory_uri(); ?>/images/arrow-up.png" alt="to top" title="To top">

<?php wp_footer(); ?>

</body>
</html>
