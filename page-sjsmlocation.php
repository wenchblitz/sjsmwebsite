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

/*
 * Template Name: SJSM Location
 */

get_template_part('header-pages');

//get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-12 col-md-12" role="main">
        <!-- Start Page Content Here-->
        
        	<div class="entry-content">
                <div class="entry-page">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    
                   <div class="container-fluid">
                       <div class="row">
                        <!--=============================-->   
                        <!--=============================-->
                        
                        <iframe class="col-lg-12 col-md-12 sjsmlocation" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7850.8021912201075!2d124.00222400000001!3d10.309750000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda8bf16a264dd4ee!2sSt.+Joseph+School!5e0!3m2!1sen!2sph!4v1434947967264"></iframe>
                        
                        <!--=============================-->   
                        <!--=============================-->
                      </div><!-- .row -->
                    </div><!-- .admin-bot -->                    

                </div>
            </div>
        <!-- Stop Page Content Here--> 
        </main><!-- #main-content -->
        
        <?php //get_template_part( 'connect/sidebar', 'contacts' ); ?>
        
    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>        