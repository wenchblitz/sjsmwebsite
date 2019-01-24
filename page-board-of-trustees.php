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
 * Template Name: BOT Page
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
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-cathy.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Catherine Serafica, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Chairperson</label>
                                </center>                                    
                            </figure>
                        </div> 
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-ama.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Amabelle Amihan, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Secretary</label>                                    
                                </center>                                    
                            </figure>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-josephini.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Josephini Ambatali, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>
                                </center>                                    
                            </figure>
                        </div>                         
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-ching.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Marie Teresita Bravo, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                   
                                </center>                                    
                            </figure>
                        </div>        
                        
                        <!---->
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-rory.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Josefina Aurora Gonzalez, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>
                                </center>                                    
                            </figure>
                        </div>                                                         
                                                                                                
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-vangie.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Evangelina Labanda, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                    
                                </center>                                    
                            </figure>
                        </div>       
                                                                                                  
                        <!---->  
                                                                                                  
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-agnes.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Agnes V. Labitoria, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                    
                                </center>                                    
                            </figure>
                        </div>  
                                                                                                                       
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-edith.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Editha Radam, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                    
                                </center>                                    
                            </figure>
                        </div>                                                                        
                                                                        
                        <!---->
                        
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-ched.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Mercedes Salud, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                    
                                </center>                                    
                            </figure>
                        </div>  
                                                                                                                       
                        <div class="col-lg-6 col-md-6">
                            <figure class="container-fluid">
                                <center class="row">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/admin-bot/sr-espervistro.jpg" class="img-circle">
                                    <label class="col-lg-12 col-md-12">Sr. Esperanza Vistro, SFIC</label>
                                    <label class="col-lg-12 col-md-12">Member</label>                                    
                                </center>                                    
                            </figure>
                        </div>                                                                        
                                                                        
                        <!----> 

                        
                      </div><!-- .row -->
                    </div><!-- .admin-bot -->                    

                </div>
            </div>
        <!-- Stop Page Content Here--> 
        </main><!-- #main-content -->
        
        <?php get_template_part( 'connect/sidebar', 'contacts' ); ?>
        
    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>        