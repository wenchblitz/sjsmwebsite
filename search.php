<?php
/**
 * The template for displaying search results pages.
 *
 * @package sjsmwebsite
 */

get_template_part('header-pages');

//get_header();?>

<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Search Content Here-->

            <?php if ( have_posts() ) : ?>

                    <header class="page-header the-search-results">
                        <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sjsmwebsite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'connect/loop', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <?php //the_posts_navigation(); ?>
                    <?php wp_pagenavi(); ?>

                <?php else : ?>

                    <?php get_template_part( 'connect/loop', 'none' ); ?>

                <?php endif; ?>                                

        <!-- Stop Search Content Here--> 
        </main><!-- #main-content -->

        <?php get_sidebar(); ?>

    </div><!-- #row -->
</div><!-- #container -->

<?php get_footer(); ?>
