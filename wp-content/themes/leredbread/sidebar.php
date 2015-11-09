<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<aside class="sidebar-contact">
		<h2>Contact Info</h2>
		<p>
			<i class="fa fa-phone"></i><span><a href="tel:5553434567891">(555) 343 456 7891</a></span>
		</p>
		<p>
			<i class="fa fa-envelope"></i><span><a href="mailto:info@leredbread.com">info@leredbread.com</a></span>
		</p>
		<p>
			<i class="fa fa-map-marker"></i><span>123 Hastings Street,<br/>
			Vancouver, BC V61 2T9, CA</span>
		</p>
	</aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<aside class="sidebar-archive">
		<h2>Archives</h2>
		<?php wp_get_archives('type=monthly'); ?>
	</aside>
</div><!-- #secondary -->
