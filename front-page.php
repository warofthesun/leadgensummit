<!--front page-->
<?php get_header(); ?>

			<div id="content">
				<div class="event-info">
					<div class="event-date">
					<?php the_field('month', 'option'); ?>
					<span class="slab dark">
						<?php the_field('first_day', 'option'); ?></span><sup><?php the_field('ordinal_one', 'option'); ?></sup><span class="accent" style="padding:0 .1em;display: inline-block;font-weight: 100;">
						&ndash;</span><span class="slab dark"><?php the_field('last_day', 'option'); ?></span><sup><?php the_field('ordinal_two', 'option'); ?></sup>
				</div>
				<span class="event-location">Nashville, TENN</span>
				</div>
				<div id="trigger-cloud-md-sm-wt-1">
					<div class="cloud-medium-small-white" id="cloud-md-sm-wt-1"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-medium-small-white.png"></div>
					<div class="cloud-medium-small-white cloud-medium-small-white__right" id="cloud-md-sm-wt-2"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-large-white.png"></div>
				</div>
				<section class="wrap row" style="margin-top: 5em;">
						<main id="main" class="col-xs-12 front-page" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




												<?php

												// check if the flexible content field has rows of data
												if( have_rows('home_content') ):

												     // loop through the rows of data
												    while ( have_rows('home_content') ) : the_row();

												        if( get_row_layout() == 'content_section' ): ?>

																<?php if( get_sub_field('header')) : ?>
																	<a class="anchor" id="<?php $anchor = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $anchor ); ?>"></a>
																	<span class="h-wrap"><h1><?php the_sub_field('header'); ?></h1></span>
																<?php endif;?>

																<?php if( get_sub_field('include_form')) : ?>
																	<div class="row" style="margin:1em 1em 8em;">
																		<div class="col-xs-12 col-md-6"><?php the_sub_field('content'); ?></div>
																		<div class="col-xs-12 col-md-6"><?php $form = get_sub_field('form'); echo do_shortcode($form); ?></div>
																	</div>
																<?php else : ?>
																	<div class="row" style="margin:1em 1em 8em;">
																		<div class="col-xs-12"><?php the_sub_field('content'); ?></div>
																	</div>
												        <?php endif; ?>
																<?php endif; endwhile; else :

												    // no layouts found

												endif;

												?>



							<?php endwhile; ?>

							<?php else : endif; ?>

						</main>

				</section>

			</div>

<?php get_footer(); ?>
