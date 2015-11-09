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
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/dr-dosist-headshot.png" alt="Dr. Dosist Headshot" />
						<div class="review-content">
							<p>
								Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
							</p>
							<p class="reviewer-name">
								Dr. Dosist
							</p>
							<p class="reviewer-info">
								Nutritionist – <a href="#">Health Time Clinic</a>
							</p>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/maxi-milli-headshot.png" alt="Maxi Milli Headshot" />
						<div class="review-content">
							<p>
								Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?							</p>
							<p class="reviewer-name">
								Maxi Milli
							</p>
							<p class="reviewer-info">
								Chef – <a href="#">Sailor Spoon</a>
							</p>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/ana-vandana-headshot.png" alt="Ana Vandana Headshot" />
						<div class="review-content">
							<p>
								Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!							</p>
							<p class="reviewer-name">
								Anna Vandana
							</p>
							<p class="reviewer-info">
								Author - <a href="#">Food Is Great Magazine</a>
							</p>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/martha-m-masters-headshot.png" alt="Martha M. Masters Headshot" />
						<div class="review-content">
							<p>
								Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.							</p>
							<p class="reviewer-name">
								Martha M. Masters
							</p>
							<p class="reviewer-info">
								Food Critic – <a href="#">WikiTravel</a>
							</p>
						</div>
					</li>
				</ul>
			</section>
		</main>
	</div>

<?php get_footer(); ?>
