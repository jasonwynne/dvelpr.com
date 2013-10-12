<?php get_header(); ?>



<div id="page-project">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
		
		<ul class="cat-list"> 
			<?php wp_list_categories('orderby=id&show_count=0&exclude=17&title_li='); ?>
		</ul>
		
		
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks holder-cat clearfix">
		<?php if ( have_posts() ):?>
		  <?php while ( have_posts() ) : the_post(); ?>
			<?php $author_name = get_the_author_meta('nickname'); ?>
		  <?php endwhile; wp_reset_query(); ?>
		<?php endif; ?>
		<h3>
		  <?php if( is_author() ): ?>
			Author: <?php echo $author_name ?>
		  <?php elseif( is_category() ): ?>
			Category: <?php single_cat_title(); ?>
		  <?php elseif( is_tag() ): ?>
			Tag: <?php single_tag_title(); ?>
		  <?php elseif( is_month() ): ?>
			Archive for <?php the_time('F Y'); ?>
		  <?php else: ?>
			Archive
		  <?php endif; ?>
		</h3>
			<?php if ( have_posts() ): ?>
			  <?php while ( have_posts() ) : the_post(); ?>
			  <div class="single-holder">
					<div class="single-image">
						<img src="<?php the_field('home_square_sprite'); ?>" alt="<?php the_title(); ?>" />
					</div>
					<div class="single-copy">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php the_excerpt(); ?>
					</div>
					<div class="clear"></div>
				</div>
			  <?php endwhile; wp_reset_query(); ?>
			<?php else: ?>
			  <h2>No posts found</h2>
			<?php endif; ?>
			
			<div class="cat-pag-holder">
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div class="prev">
						<?php next_posts_link( __( 'More &rarr; ' ) ); ?>
					</div>
					<div class="next">
						<?php previous_posts_link( __( '&larr; Back' ) ); ?>
					</div>
				<?php endif; ?>
			<div class="clear"></div>	
			</div>
			
		</div> <!-- end holder-cat -->
		



			
	<div class="clear"></div>	
	</div>


 











<?php get_footer(); ?>