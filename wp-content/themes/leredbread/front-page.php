<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  This is front-page.php hello
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero">
        <span class="hero-text">baked to perfection</span>
      </section>
      <section class="product-container">
        <div class="product-wrapper">
          <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bread.png" alt="Bread" />
            <h3>BREAD</h3>
            <p>
              Bread is the ultimate comfort food! Our lust-worthy loaves will satisfy your most intense carb cravings. <a href="#">See More...</a>
            </p>
          </div>
          <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/images/coffee.png" alt="Coffee" />
            <h3>COFFEE</h3>
            <p>
              Start your day with decadent cup o' joe, or pop in for a mid-afternoon pick me up. Caffeine FTW. <a href="#">See More...</a>
            </p>
          </div>
          <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pretzels.png" alt="Product" />
            <h3>PRETZELS</h3>
            <p>
              Our soft-pretzels are available in a variety of flavours. When they taste this good, one is never enough! <a href="#">See More...</a>
            </p>
          </div>
          <div class="product">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sweets.png" alt="Sweets" />
            <h3>SWEETS</h3>
            <p>
              Our sinfully delicious sweets are simply irresistible! These gourmet treats will keep you coming back. <a href="#">See More...</a>
            </p>
          </div>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
