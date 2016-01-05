<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php if ( 'testimonial' === get_post_type() ) : ?>
			<p><?php echo wp_trim_words( CFS()->get( 'content' ), 50, ' [...]' ); ?></p>
			<p><a href="<?php the_permalink(); ?>" class="read-more">Read more &rarr;</a></p>
		<?php elseif ( 'page' === get_post_type() && 'about' === get_post_field( 'post_name', get_the_ID() ) ) : ?>
			<p><?php echo wp_trim_words( CFS()->get( 'team_story' ), 50, ' [...]' ); ?></p>
			<p><a href="<?php the_permalink(); ?>" class="read-more">Read more &rarr;</a></p>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
