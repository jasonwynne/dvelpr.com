<?php
 /* Template Name:Contact Page*/
?>

<?php get_header(); ?>

<div id="page-contact">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks">
		<div class="form-contact">
			<?php the_field('contact_top'); ?>	
		 	<?php echo do_shortcode('[contact-form-7 id="4" title="Contact Jaze"]'); ?>
		</div>
		
	</div>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>