
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="">
			<?php the_archive_title ('<h1>','</h1>'); ?>
			<?php the_archive_description('<p>','</p>'); ?>
		</div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="taxonomy-product">
          <?php the_post_thumbnail('thumbnail'); ?>
          <div class="taxonomy-product-desc">
              <h2 class="taxonomy-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_content(); ?>

              <?php if( get_post_meta($post->ID, 'price', true)): ?>
                  Price: <?php echo get_post_meta($post->ID, 'price', true); ?>
              <?php endif; ?>
          </div>
        </div>
    <?php endwhile; ?>
  </main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
