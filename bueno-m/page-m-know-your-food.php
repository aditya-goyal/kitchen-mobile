<?php
/*Template Name: Mobile Know Yor Food*/
?>
<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php get_header(); ?>
<style>
#maincontent {
	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_know-your-food.jpg);
	background-size:contain;
	color: #fff;
}
#m-pg-know-your-food h2 {
	color: #fff !important;
	text-align: center !important;
	font-weight: 700 !important;
	font-size: 40px !important;
	font-family: 'Amatic SC', cursive !important;
	font-style: normal !important;
}
#m-pg-know-your-food p {
	border-bottom: 1px dotted #fff;
	padding-bottom: 10px;
	font-size: 16px;
	line-height: 21px;
}
</style>

<div class="wmffcontainer">
  <div id="m-pg-know-your-food">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/know-food-01.png" alt="Things About Food" style="margin-top:20px;" />
    <div class="post-padding"></div>
    <!-- section -->
    <section role="main">
      <?php $latest = new WP_Query('showposts=-1&cat=136'); ?>
      <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
      <p>
        <?php the_title(); ?>
      </p>
      <?php endwhile; ?>
      <?php get_template_part('pagination'); ?>
    </section>
    <!-- /section --> 
  </div>
</div>
<?php get_footer(); ?>