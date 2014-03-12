<?php
 /* Template Name:Home Page*/


	get_header(); 
	

	
?>

<div id="page-home">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Developer / UXUI / Designer<br />Minneapolis, MN</h5>
		</div>
			<?php wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
				
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks clearfix">
 			<?php
				$custom_query = new WP_Query( array('post_type' => 'post','showposts' => 24) );
				while($custom_query->have_posts()) : $custom_query->the_post();
				$theHomeSprite = get_field('home_square_sprite');
			?>

				<div class="block">
					<div class="block-thumb" style="background-image:url('<?php echo $theHomeSprite ?>'); background-color: transparent;" data-link="<?php the_permalink(); ?>"></div>
				</div>
				
			<?php endwhile; wp_reset_query(); ?>
		
	</div>
	<div class="clear"></div>
</div>


<script type="text/javascript">
	$(function () {
	
		$(".block").each(function(i) {
			$(this).children('.block-extended').addClass('ext'+i);
			$(this).children('.block-thumb').addClass('thumb'+i);
			$(this).addClass('block'+i);
		});

		$(".block-thumb").click(function(e) {
			e.preventDefault();
			var myLink = $(this).attr('data-link');
			window.open(myLink,'_self');	
		});
		
		
	});

</script>

<?php get_footer(); ?>