<?php
/*
 Template Name: Conference Materials
*/
?>
<!--page-conference_materials-->
<?php get_header('inner'); ?>

			<div id="content" class="conference_materials">

				<div id="inner-content" class="wrap">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content " itemprop="articleBody">

									<?php if( have_rows('conference_materials') ): ?>
										 	<ul>
										   <?php while ( have_rows('conference_materials') ) : the_row(); ?>
											 	<li>
 													<h2><?php the_sub_field('session_name'); ?></h2>
													<h3><?php the_sub_field('session_presenter'); ?></h3>
													<?php if( have_rows('downloads') ): ?>
														<ul>
															<?php while ( have_rows('downloads') ) : the_row(); ?>
																<li>
																	<?php
																			$link = get_sub_field('download');

																			if( $link ):
																				$link_url = $link['url'];
																				$link_title = $link['title'];
																				$link_target = $link['target'] ? $link['target'] : '_self';
																				?>
																				<a class="accent-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
																			<?php endif; ?>
																</li>
															<?php endwhile; ?>
														</ul>
													<?php endif; ?>
													<div class="embed-container">
													    <?php the_sub_field('video'); ?>
													</div>
												</li>
											<?php endwhile; ?>
											</ul>
									<?php	else : endif;	?>

								</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'Error message', 'startertheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer('inner'); ?>
