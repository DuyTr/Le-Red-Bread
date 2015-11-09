<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <header class="archive-header">
  		<?php the_archive_title( '<h1>', '</h1>' ); ?>
      <p>We are a team of creative and talented individuals who love making delicious treats.</p>
  	</header>
    <hr class="decorative">
    <section class="archive-product-container">
       <?php
        $taxonomy = 'product-type';
        $terms = get_terms($taxonomy);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
          foreach ( $terms as $term ): ?>
          <div class="archive-product-type">
            <a href="<?php echo get_term_link($term);?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png" alt="" />
              <h3><?php echo $term->name; ?></h3>
            </a>
          </div>
          <?php endforeach;?>
        <?php endif;?>
    </section>
    <div class="archive-grid">
      <?php if ( have_posts() ) : ?>
  			<?php /* Start the Loop */ ?>
  			<?php while ( have_posts() ) : the_post(); ?>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="archive-product">
  			       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
  		         <?php endif; ?>
               <div class="archive-meta">
    		          <span class="archive-meta-title"><?php the_title( ); ?></span>
    			        <span class="archive-meta-price"><?php echo esc_html( CFS()->get('price')); ?></span>
               </div>
            </div>
  			<?php endwhile; ?>
  			<?php the_posts_navigation(); ?>
  		<?php else : ?>
  			<?php get_template_part( 'template-parts/content', 'none' ); ?>
  		<?php endif; ?>
    </div>
</main>
</div>
<?php get_footer(); ?>
