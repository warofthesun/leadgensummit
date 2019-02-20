<!--front page-->
<?php get_header(); ?>

			<div id="content">
				<div class="event-info">
					<div class="event-date">
					<?php the_field('month', 'option'); ?> <span class="slab dark"><?php the_field('first_day', 'option'); ?></span><sup><?php the_field('ordinal_one', 'option'); ?></sup><span class="accent" style="padding:0 .1em;display:inline-block;">&ndash;</span><span class="slab dark"><?php the_field('last_day', 'option'); ?></span><sup><?php the_field('ordinal_two', 'option'); ?></sup></div><span class="event-location">Nashville, TN</span>
				</div>
				<div class="wrap row">
						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post' ); ?> role="article">
								<div class="hero--image"><?php the_post_thumbnail('gallery-image'); ?></div>


									<?php the_content(); ?>


							</article>

							<?php endwhile; ?>

							<?php else : endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
