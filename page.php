<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sjsmwebsite
 */

get_template_part('header-pages');

//get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Page Content Here-->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'connect/loop', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
        <!-- Stop Page Content Here--> 
        </main><!-- #main-content -->
        
     <?php get_template_part( 'connect/sidebar', 'contacts' ); ?>
           
    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>
