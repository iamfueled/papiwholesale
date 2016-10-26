<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<?php get_template_part( "/templates/beforeloop", "page" ) ?> 

	<h1>Welcome, papi</h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part( "/templates/content", "page" ) ?>

    <?php endwhile; else: ?>

        <?php get_template_part( "/templates/content", "none" ); ?>

    <?php endif; ?>

	<?php if (!( is_user_logged_in() )) : ?>
    <a href="http://localhost:8888/PapiWholesale2/builds/development/register/">Register</a> to become a member. All memberships are prescreened and we will notify you if you are approved.
	<?php endif; ?>

<?php get_template_part( "/templates/afterloop", "page" ) ?> 

<?php get_footer(); ?>