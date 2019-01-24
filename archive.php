<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sjsmwebsite
 */

get_template_part('header-pages');

//get_header(); ?>

<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Archives Content Here-->

    <?php
        /* Queue the first post, that way we know
         * what date we're dealing with (if that is the case).
         *
         * We reset this later so we can run the loop
         * properly with a call to rewind_posts().
         */
        if ( have_posts() )
            the_post();
    ?>

    <h1 class="info-holder" >
        <?php if ( is_day() ) : ?>
           
            <?php printf( __( '<strong>Daily Archives:</strong> <span>%s</span>'), get_the_date() ); ?>
            
        <?php elseif ( is_month() ) : ?>
                       
            <?php printf( __( '<strong>Monthly Archives:</strong> <span>%s</span>'), get_the_date( 'F Y' ) ); ?>
                        
        <?php elseif ( is_year() ) : ?>
                       
            <?php printf( __( '<strong>Yearly Archives:</strong> <span>%s</span>'), get_the_date( 'Y' ) ); ?>
                        
        <?php else : ?>
                       
            <?php _e( '<strong>Blog Archives</strong>'); ?>
                        
        <?php endif; ?>
    </h1>


    <?php
        /* Since we called the_post() above, we need to
         * rewind the loop back to the beginning that way
         * we can run the loop properly, in full.
         */
        rewind_posts();

        /* Run the loop for the archives page to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-archive.php and that will be used instead.
         */
         get_template_part( 'loop', 'archive' );
    ?>
                
        <!-- Stop Archive Content Here--> 
        </main><!-- #main-content -->

    <?php get_sidebar(); ?>

    </div><!-- #row -->
</div><!-- #container -->

<?php get_footer(); ?>
