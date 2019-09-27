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

												<?php if( have_rows('home_content') ):

											     // loop through the rows of data
											    while ( have_rows('home_content') ) : the_row();

										        if( get_row_layout() == 'content_section' ): ?>
														<span class="<?php $anchor = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $anchor ); ?>">
														<?php if( get_sub_field('header')) : ?>
															<a class="anchor" id="<?php $anchor = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $anchor ); ?>"></a>
															<span class="h-wrap"><h1><?php the_sub_field('header'); ?></h1></span>
														<?php endif;?>
															<div class="row" style="margin:1em 1em 8em;">
																<div class="col-xs-12"><?php the_sub_field('content'); ?></div>
															</div>
														</span>
													<?php elseif( get_row_layout() == 'agenda_section' ): ?>
														<span class="<?php $anchor = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $anchor ); ?>">
															<?php if( get_sub_field('header')) : ?>
																<a class="anchor" id="<?php $anchor = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $anchor ); ?>"></a>
																<span class="h-wrap"><h1><?php the_sub_field('header'); ?></h1></span>
															<?php endif;?>
															<?php if( have_rows('day_section')):

															    while ( have_rows('day_section')): the_row();

															        if( get_sub_field('header')):
																        the_sub_field('header');
																			endif;
																			if( get_sub_field('wysiwyg')):
																        the_sub_field('wysiwyg');
																			endif;
																			if( get_sub_field('agenda_items')):
																        if( have_rows('agenda_items')): ?>
																				<ul>
																				<?php	while ( have_rows('agenda_items')): the_row(); ?>
																						<li>
																							<span class="left">
																								<span class="sans" style="margin-right:.1em;display:inline;"><?php the_sub_field('start_time'); ?></span><?php the_sub_field('start_ampm');?><?php if(get_sub_field('end_time')): ?><span class="sans" style="margin-right:.1em;display:inline;">–<?php the_sub_field('end_time'); ?></span><?php the_sub_field('end_ampm'); ?><?php endif; ?>
																							</span>
																							<span class="right"><?php the_sub_field('session_title'); ?></span>
																							<?php if(get_sub_field('session_leader')): ?>
																							<span class="left">&nbsp;</span><span class="subline"><?php the_sub_field('session_leader'); ?></span>
																							<div style="clear: left;"></div>
																							<?php endif;?>
																							<?php if(get_sub_field('show_wysiwyg')): ?>
																								<span class="left">&nbsp;</span>
																								<span class="right"><?php the_sub_field('wysiwyg'); ?></span>
																							<?php endif;?>
																						</li>
																				<?php endwhile; ?>
																				</ul>
																	<?php endif; ?>
																	<?Php endif; endwhile; else : endif; ?>
														</span>

												<?php endif; endwhile; else : endif; ?>
												<!-- end flexible -->
							<?php endwhile; else : endif; ?>

						</main>

				</section>

			</div>

<?php get_footer(); ?>
