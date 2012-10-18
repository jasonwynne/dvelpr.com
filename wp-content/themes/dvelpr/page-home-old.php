<?php
 /* Template Name:Home Page*/
?>

<?php get_header(); ?>

<div id="page-home">
	<div class="holder-me">
		<div class="me-left">
			<h1>Jason J Wynne</h1>
			<h5>Web Developer / Designer<br />Minneapolis, MN</h5>
		</div>
		<?php  wp_nav_menu( array( 'menu' => 'main_menu' ) );?>
		<div class="clear"></div>
	</div>	
	<div class="holder-blocks clearfix">
		<div class="block">
			<div class="block-extended">
				<img src="<?php bloginfo('template_directory'); ?>/images/homeimage0-extended.jpg" alt="Visti"/>
				<p><a class="project-title-link" href="http://localhost/dvelpr/30cod/ ">thirtyconversationsondesign.com</a></p>
			</div>
			<div class="block-thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/homeimage0.jpg');"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
		<div class="block">
			<div class="block-extended"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>


<script type="text/javascript">
	$(function () {
		homePageActions();
	});

</script>

<?php get_footer(); ?>