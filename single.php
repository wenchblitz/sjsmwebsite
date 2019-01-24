<?php
/**
 * The template for displaying all single posts.
 *
 * @package sjsmwebsite
 */

get_template_part('header-pages');

//get_header(); ?>

<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Single Content Here-->
           
            <?php get_template_part('connect/loop', 'single'); ?>
              
        <!-- End Single Content Here-->
        </main><!-- #main-content -->
        <?php get_sidebar(); ?><!--#aside/sidebar-->
    </div><!-- #row -->
</div><!-- #container -->

<?php get_footer(); ?>
