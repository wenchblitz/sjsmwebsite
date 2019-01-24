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
 * Template Name: Administrative Council Page
 */

get_template_part('header-pages');

//get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Page Content Here-->
        
        	<div class="entry-content">
                <div class="entry-page">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    
                    <div class="container-fluid admin-bot">
                      <div class="row">
                       
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-ched.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Mercedes E. Salud, SFIC</label>
                                    <label class="col-lg-12 col-md-12">School Directress</label>
                                </center>                                    
                            </figure>
                        </div> 
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-agnes.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Agnes V. Labitoria, SFIC</label>
                                    <label class="col-lg-12 col-md-12">BED Principal</label>                                    
                                </center>                                    
                            </figure>
                        </div>
                        
                        <!---->
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-edith.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Editha Radam, SFIC</label>
                                    <label class="col-lg-12 col-md-12">School Treasurer</label>
                                </center>                                    
                            </figure>
                        </div>                         
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-melanie.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Melanie M. Galo, SFIC</label>
                                    <label class="col-lg-12 col-md-12">CFP Coordinator</label>                                    
                                </center>                                    
                            </figure>
                        </div>        
                        
                        <!---->
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-medelyn.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Medelyn Potestas, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Outreach Program Coordinator</label>
                                </center>                                    
                            </figure>
                        </div>                                                         
                                                                                                
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-nancy.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Maria Nancy P. Bacan, SFIC</label>
                                    <label class="col-lg-12 col-md-12">HS Guidance Facilitator</label>                                    
                                </center>                                    
                            </figure>
                        </div>       
                                                                                                  
                        <!---->  
                                                                                                  
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-eustella.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Eustella F. Garcia, SFIC</label>
                                    <label class="col-lg-12 col-md-12">SFIC Local Leader</label>                                    
                                </center>                                    
                            </figure>
                        </div>
                                                                        
                        <!----> 
                        
                      </div><!-- .row -->
                    </div><!-- .admin-bot -->

                </div><!--entry-page-->
            </div><!-- .entry-content -->
            
        <!-- Stop Page Content Here--> 
        </main><!-- #main-content -->
        
        <?php get_template_part( 'connect/sidebar', 'contacts' ); ?>
        
    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>        