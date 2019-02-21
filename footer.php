		<div class="city fixed"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cityscape.png"></div>
		<div class="city-base"></div>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="wrap  row">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'startertheme' ),   // nav name
    					'menu_class' => 'nav footer-nav ',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'starter_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>
			<div class="cloud-large-blue"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-blue.png"></div>
			<div class="cloud-medium-white"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-white.png"></div>
			<div class="cloud-large-blue cloud-large-blue__right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-blue.png"></div>
			<div class="cloud-medium-white cloud-medium-white__right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-white.png"></div>
			<div class="cloud-large-white"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-white.png"></div>
		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>



	</body>

</html> <!-- end of site. what a ride! -->
