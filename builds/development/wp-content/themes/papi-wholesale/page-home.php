<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<style type="text/css">
	.log{
		background:black;
	}
	.content_background{
		padding:0px;
	}
	#content{
		background:black;
	}
</style>

<?php get_template_part( "/templates/beforeloop", "fullwidth" ) ?> 

	<div class="col-md-6 log"><img src="http://localhost:8888/PapiWholesale2/builds/development/wp-content/uploads/2016/10/Login.jpg"></div>

	<div class="col-md-6">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
	</div>

<?php get_template_part( "/templates/afterloop", "fullwidth" ) ?> 

<?php get_footer(); ?>