<?php
 /* Template Name:Home Page*/
?>

<?php 

	get_header(); 
	

	
?>

<div id="page-home">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
			<?php wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
				
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks clearfix">
<!-- 
		<div class="block">
			<div class="block-extended">
				<img src="<?php bloginfo('template_directory'); ?>/images/homeimage0-extended.jpg" alt="Visti"/>
				<p><a class="project-title-link" href="http://localhost/dvelpr/30cod/ ">thirtyconversationsondesign.com</a></p>
			</div>
			<div class="block-thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/homeimage0.jpg');"></div>
		</div>
 -->
 
 			<?php
				$custom_query = new WP_Query( array('post_type' => 'post','showposts' => -1 ) );
				while($custom_query->have_posts()) : $custom_query->the_post();
				
				$theHomeSprite = get_field('home_square_sprite');
				
			?>

				<div class="block">
					<div class="block-extended" data-link="<?php the_permalink(); ?>">
						<img src="<?php the_field('home_square_extended'); ?>" alt="<?php the_field('home_square_title'); ?>"/>
						<div class="title-link">	
							<a class="project-title-link" ><?php the_field('home_square_title'); ?></a>
						<!-- 	<a class="project-title-hover"><?php the_field('home_square_hover'); ?> &rarr;</a> -->
						</div>
					</div>
					<div class="block-thumb" style="background-image:url('<?php echo $theHomeSprite ?>'); background-color: transparent;"></div>
				</div>
				
			<?php endwhile; wp_reset_query(); ?>
		
	</div>
	<div class="clear"></div>
</div>


<script type="text/javascript">
	$(function () {
		homePageActions();
	});

</script>

<?php get_footer(); ?>