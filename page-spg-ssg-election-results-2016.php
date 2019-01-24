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
 * Template Name: SPG and SSG Results
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
                           <div class="col-lg-12 col-md-12  code-of-conduct"> 
                                <!--=========================================================================================================================-->
                                <div class="pageview">                                    
                                    <iframe src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/Election-SPG.htm" frameborder="0" style="" scrolling="no" height="975" width="100%"></iframe>
                                    <hr>
                                    <iframe src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/Election-SSG.htm" frameborder="0" style="" scrolling="no" height="1100" width="100%"></iframe>                               
                                </div>                         
                                <!--=========================================================================================================================-->    
                        </div><!-- .code of conduct -->                        
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