<?php
 /* Template Name:Project Page*/
?>

<?php get_header(); ?>


<div id="page-project">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
			
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks holder-project clearfix">
	
			<div class="slide-holder">
			<?php while(the_repeater_field('project_slideshow')): ?>
				<div class="slide"><img src="<?php the_sub_field('main_image'); ?>" alt="<?php the_sub_field('image_title'); ?>" /></div>
			<?php endwhile; ?>
			</div>
			
			<div class="thumb-holder clearfix">
			<div class="thumb-cover"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-cover.png" alt="thumb cover" /></div>	
			<?php while(the_repeater_field('project_thumbs')): ?>
				<div class="thumb"><img src="<?php the_sub_field('project_thumb'); ?>" alt="thumb for project" /></div>
			<?php endwhile; ?>
			</div>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			  <h2><?php the_title(); ?></h2>
			  <h5><?php the_time('F Y'); ?></h5>
			  <?php the_content(); ?>
			<?php endwhile; wp_reset_query(); ?>
			
		
	</div>
	<div class="clear"></div>
</div>


<script type="text/javascript">
	projectPageActions();
</script>

<?php get_footer(); ?>