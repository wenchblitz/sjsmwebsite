<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sjsmwebsite
 */

get_template_part('header-pages');

//get_header(); ?>

<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start 404 Content Here-->                            
               
                    <section class="error-404 not-found entry-content">
                        <header class="page-header">
                            <h3 class="page-title">
                                <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sjsmwebsite' ); ?>
                            </h3>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search instead?', 'sjsmwebsite' ); ?></p>
                            
                            <!--<p><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sjsmwebsite' ); ?></p>-->

                            <?php //get_search_form(); ?>
                            
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
       
        <!-- Stop 404 Content Here--> 
        </main><!-- #main-content -->

    <?php get_sidebar(); ?>

    </div><!-- #row -->
</div><!-- #container -->

<?php get_footer(); ?>
