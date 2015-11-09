<?php
/**
 * The main template file.
 * Template Name:about page
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="about-page-header">
			<?php
				the_title( '<h1 class="about-page-title">', '</h1>' );
			?>
			<div class="team-motto">
				<?php echo  CFS()->get('team_motto'); ?>
			</div>
		</header>
		<hr class="decorative">
		<div class="leftright-wrapper">
			<div class="left-side">
				<img src="<?php echo get_template_directory_uri(); ?>/images/team.jpg" alt="Le Red Bread Team" />
				<h3>Le Red Bread Team</h3>
				<p class="sub-head">Baking up a storm everyday</p>
				<?php echo  CFS()->get('left_side'); ?>
			</div>
			<div class="right-side">
				<img src="<?php echo get_template_directory_uri(); ?>/images/bakery.jpg" alt="Le Red Bread Bakery" />
				<h3>Le Red Bread Team</h3>
				<p class="sub-head">Home away from home</p>
				<?php echo  CFS()->get('right_side'); ?>
			</div>
		</div>
		<div class="team-story">
			<h3>Our Story</h3>
			<?php echo  CFS()->get('team_story'); ?>
		</div>
		<div class="small-banner">
			<p>
				<span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
				<a href="http://lrb.red.academy/products/" class="btn">Contact Us</a>
			</p>
		</div>
	</main>
</div>
<?php get_footer(); ?>
