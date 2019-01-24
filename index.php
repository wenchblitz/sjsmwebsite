<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sjsmwebsite
 */
//include("header-pages.php") 

/*
 * Template Name: Main Blog
 */

get_template_part('header-pages');

//get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Blog Content Here-->

            <?php get_template_part('loop'); ?>                            
                               
        <!-- Stop Blog Content Here--> 
        </main><!-- #main-content -->

    <?php get_sidebar(); ?>

    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>