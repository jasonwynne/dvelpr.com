<?php
 /* Template Name:Home Page*/


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
 			<?php
				$custom_query = new WP_Query( array('post_type' => 'post','showposts' => -1 ) );
				while($custom_query->have_posts()) : $custom_query->the_post();
				$theHomeSprite = get_field('home_square_sprite');
			?>

				<div class="block" data-link="<?php the_permalink(); ?>">
					<!-- 
<div class="block-extended" data-link="<?php the_permalink(); ?>">
						<img src="<?php the_field('home_square_extended'); ?>" alt="<?php the_field('home_square_title'); ?>"/>
						<div class="title-link">	
							<a class="project-title-link" ><?php the_field('home_square_title'); ?></a>
						<!~~ 	<a class="project-title-hover"><?php the_field('home_square_hover'); ?> &rarr;</a> ~~>
						</div>
					</div>
 -->
					<div class="block-thumb" style="background-image:url('<?php echo $theHomeSprite ?>'); background-color: transparent;"></div>
				</div>
				
			<?php endwhile; wp_reset_query(); ?>
		
	</div>
	<div class="clear"></div>
</div>


<script type="text/javascript">
	$(function () {


	var currentItem;
	
	$(".block").each(function(i) {
		$(this).children('.block-extended').addClass('ext'+i);
		$(this).children('.block-thumb').addClass('thumb'+i);
		$(this).addClass('block'+i);
	});

	$(".block-thumb").click(function() {
		
		currentItem = $(this).attr('class');
		currentItem = parseInt(currentItem.substring(17));
		
		var overWidth = $('.holder-blocks').width();
		var overheight = $('.holder-blocks').height();
		var myCalWidth = overWidth-125;
		var myCalHeight = overheight-125;
		var p = $('.block'+currentItem);
		var position = p.position();
		var myPosLeft = position.left;
		var myPosTop = position.top;
		
		$('.ext'+currentItem).css('margin','-25px 0 0 -90px');	
	
		
		if(myPosLeft<100){
			$('.ext'+currentItem).css('margin-left','-10px');	
		}
		if(myPosTop<100){
			$('.ext'+currentItem).css('margin-top','-10px');	
		}
		if(myPosLeft>myCalWidth){
			$('.ext'+currentItem).css('margin-left','-170px');	
		}
		if(myPosTop>myCalHeight){
			$('.ext'+currentItem).css('margin-top','-40px');
		}
		
		$('.block-extended').hide(50);
		openExt(currentItem);
		
	});
	

	$(".block-extended").click(function(e) {
		e.preventDefault();
		var myLink = $(this).attr('data-link');
		console.debug('mylinkk is = '+myLink);
		window.open(myLink,'_self');
	});
	
	
	function openExt(x) {
			$('.ext'+currentItem).show(75, function(){
				$('.ext'+currentItem).mouseout(function(){
					$(this).hide(50);
				});
			});
			
	}


		
		
		
	});

</script>

<?php get_footer(); ?>