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
 * Template Name: Home Page
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Frontpage Content Here-->
            
            <?php get_template_part('connect/bxslider'); ?>

            <!--News and Updates-->
            <article class="container-fluid">
              <div id="latestUpdates" class="row">
                  <div class="col-lg-12 col-md-12">
                      <h3><center>News and Updates</center></h3>
                  </div>                      
              </div>                  
            </article>
            <!--End News and Updates-->

            <!--start showing latest activities-->
            
                <?php query_posts($query_string . 'showposts=5'); ?> <!-- 'showposts=10' -->                   
                <?php get_template_part( 'loop-home', 'homepage' ); ?> 
                                    
            <!--stop showing latest activities-->
       
        <!-- Stop Frontpage Content Here--> 
        </main><!-- #main-content -->
        
        <?php get_template_part('connect/sidebar', 'home'); ?> 
        
    </div><!--#row-->
</div><!--#container-->
<?php get_footer(); ?>        
