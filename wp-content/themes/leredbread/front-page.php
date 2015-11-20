<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
      <section class="hero">
        <span class="hero-text">baked to perfection.</span>
      </section>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      <section class="product-container">
				 <?php
	        $taxonomy = 'product-type';
				 	$terms = get_terms($taxonomy);
				 	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
				 		foreach ( $terms as $term ): ?>
				 		<div class="product-type">
							<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png" alt="" />
				 			<h3><?php echo $term->name; ?></h3>
							<p><?php echo $term->description;?> <a href="<?php echo get_term_link($term);?>">See More....</a></p>
						</div>
				 		<?php endforeach;?>
					<?php endif;?>
			</section>
			<div class="small-banner">
				<p>
					<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
					<a href="http://lrb.red.academy/products/" class="btn">See Our Products</a>
				</p>
			</div>
			<section class="latest-new">
				<h2>Our Latest News</h2>
				<hr class="decorative">
				<ul class="latest-new-list">
					<?php
					$args = array( 'posts_per_page' => 4);

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li class="latest-new-item">
							<?php the_post_thumbnail(); ?>
							<div class="latest-new-footer">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<span class="latest-new-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number('No Comment' , '1 Comment', '% Comments' ); ?>
							</span>
						</div>
						</li>
					<?php endforeach;
					wp_reset_postdata();?>
				</ul>
			</section>
			<section class="testimonial">
				<h2>what others say about us</h2>
				<hr class="decorative">
				<ul>
					<?php
						$args = array( 'posts_per_page' => 4, 'post_type' => 'testimonial');
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
					  <li>
								<?php  echo wp_get_attachment_image( CFS()->get('headshot') ,array(100,100)); ?>
								<div class="review-content">
									<?php echo CFS()->get('content'); ?>
									<p class="reviewer-name"><?php the_title(); ?></p>
									<p class="reviewer-info">
										<?php echo CFS()->get('job_title'); ?> - <?php echo CFS()->get('company'); ?>
									</p>
								</div>
						</li>
					<?php endforeach;
					wp_reset_postdata();?>

				</ul>
			</section>
		</main>
	</div>

<?php get_footer(); ?>
