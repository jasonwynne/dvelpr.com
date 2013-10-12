<?php get_header(); 

$thisPost = get_post_type( $post->ID );

?>



<?php if($thisPost == 'post') {?>

<div id="page-project">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
		
		<ul class="cat-list"> 
			<?php wp_list_categories('orderby=id&show_count=0&exclude=17,19&title_li='); ?>
		</ul>
		
		
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
			  <h3><?php the_time('F Y'); ?></h3>
			  <h3>Company: <?php the_field('company_name'); ?></h3>
			  <?php if (get_field('website_url')) { ?>
			 	 <h3 class="web-addy">Website: <a href="<?php the_field('website_url'); ?>" target="_blank" ><?php the_field('website_name'); ?></a></h3>
			  <?php } else { ?>
			  	 <h3 class="web-addy">Website: <?php the_field('website_name'); ?></h3>
			   <?php } ?>	
			  <?php the_content(); ?>
			<?php endwhile; wp_reset_query(); ?>
			

			<ul class="pag-holder clearfix">
				<li class="prev"><?php next_post_link( '%link',__( '&larr; Prev Project' ) ); ?>&nbsp;</li>
				<li class="btn-back"><a href="<?php echo home_url( '/' ); ?>">Go Back</a></li>
				<li class="next"><?php previous_post_link('%link', __( 'Next Project &rarr;' ) ); ?></li>		
			</ul>
			
		
	</div>
	<div class="clear"></div>
</div>
 

<script type="text/javascript">
	projectPageActions();
</script>

<?php } else { ?>

<div id="page-diary">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
		
		<ul class="cat-list"> 
			<?php wp_list_categories('orderby=id&show_count=0&exclude=17,19&title_li='); ?>
		</ul>
		
		
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks holder-diary clearfix">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			  <h2><?php the_title(); ?></h2>
			  <h3><?php the_time('F Y'); ?></h3>
			  <h3>Company: <?php the_field('company_name'); ?></h3>
			  <?php if (get_field('website_url')) { ?>
			 	 <h3 class="web-addy">Website: <a href="<?php the_field('website_url'); ?>" target="_blank" ><?php the_field('website_name'); ?></a></h3>
			  <?php } else { ?>
			  	 <h3 class="web-addy">Website: <?php the_field('website_name'); ?></h3>
			   <?php } ?>	
			  <?php the_content(); ?>
			<?php endwhile; wp_reset_query(); ?>
			

			<ul class="pag-holder clearfix">
				<li class="prev"><?php next_post_link( '%link',__( '&larr; Prev Project' ) ); ?>&nbsp;</li>
				<li class="btn-back"><a href="<?php echo home_url( '/' ); ?>">Go Back</a></li>
				<li class="next"><?php previous_post_link('%link', __( 'Next Project &rarr;' ) ); ?></li>		
			</ul>
			
		
	</div>
	<div class="clear"></div>
</div>

<?php } ?>





<?php get_footer(); ?>