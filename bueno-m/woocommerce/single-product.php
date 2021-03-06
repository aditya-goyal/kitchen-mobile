<?php
/**
 * The Template for displaying all single products (individually).
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

<div class="main-container container-non-responsive fixed-width">
  <div class="box-layout">
    <div class="row">
      <section class="row">
        <?php
				/**
		 		* woocommerce_sidebar hook
		 		*
		 		* @hooked woocommerce_get_sidebar - 10
		 		*/
				//do_action( 'woocommerce_sidebar' );
				get_sidebar('content-top');
			?>
        <?php
				/**
		 		* woocommerce_sidebar hook
		 		*
		 		* @hooked woocommerce_get_sidebar - 10
		 		*/
				//do_action( 'woocommerce_sidebar' );
				get_sidebar('order-top');
			?>
        <?php
				/**
		 		* woocommerce_before_main_content hook
		 		*
		 		* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 		* @hooked woocommerce_breadcrumb - 20
		 		*/
				//do_action( 'woocommerce_before_main_content' );
			?>
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
        <?php endif; ?>
        <?php do_action( 'woocommerce_archive_description' ); ?>
        <?php if ( have_posts() ) : ?>
      </section>
      <section class="row">
        <aside class="col-md-3 col-xs-12 aside-filter">
          <?php
				/**
		 		* woocommerce_sidebar hook
		 		*
		 		* @hooked woocommerce_get_sidebar - 10
		 		*/
				//do_action( 'woocommerce_sidebar' );
				get_sidebar('left');
			?>
        </aside>
        <div class="col-md-6 col-xs-12 product-list content" id="content">
          <div class="loading-image"></div>
          <div class="added-msg">Added to Your Menu!</div>
          <?php woocommerce_product_loop_start(); ?>
          <?php woocommerce_product_subcategories(); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <?php wc_get_template_part( 'content', 'product' ); ?>
          <?php endwhile; // end of the loop. ?>
          <?php woocommerce_product_loop_end(); ?>
          <?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>
        </div>
        <aside class="col-md-3 col-xs-12" id="shop_right_sidebar">
          <?php
				/**
		 		* woocommerce_sidebar hook
		 		*
		 		* @hooked woocommerce_get_sidebar - 10
		 		*/
				//do_action( 'woocommerce_sidebar' );
				get_sidebar('right');
			?>
        </aside>
      </section>
      <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
      <?php wc_get_template( 'loop/no-products-found.php' ); ?>
      <?php endif; ?>
      <?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
    </div>
  </div>
</div>
<?php get_footer( 'shop' ); ?>
