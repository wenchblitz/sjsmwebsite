<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>                     
       
        <article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>         
          <div class="row entry-content">
              
             <!--Post's Featured Image-->
              <div class="col-lg-5 col-md-5 post-image">            
                  <figure >            
                    <?php if ( has_post_thumbnail() ) {    
                        the_post_thumbnail('full', array( 'class' => 'img-responsive' ));    
                    } else { ?>                       
                        <img src="<?php bloginfo('template_directory'); ?>/images/fallback-thumbnail.jpg" class="img-responsive" alt="<?php the_title(); ?>" />                        
                    <?php } ?>
                  </figure>            
              </div>

              <!--Post's Details-->
              <div class="col-lg-7 col-md-7 post-details">
                <header class="entry-header">
                <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>            
                    <div class="entry-meta"> 
                        <span class="glyphicon glyphicon-time"><label class="itime"><?php the_time(' F j, Y') ?></label></span>
                        <span class="glyphicon glyphicon-folder-open"><label>&nbsp;&nbsp;<?php the_category(', '); ?></label></span>
                        <!-- <span class="glyphicon glyphicon-comment"><label>&nbsp;&nbsp;<?php //comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></label></span>-->
                        <span class="glyphicon glyphicon-user"><label class="iuser"><?php the_author_link(); ?></label></span>
                    </div><!-- .entry-meta -->                
                </header><!-- .entry-header -->

                <main class="entryContent">
                   <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>                      
                       <?php the_excerpt(); ?>                       
                   <?php else : ?>                   
                       <?php the_content('Read More →'); ?>                    
                   <?php endif ?>
                </main>
                
              </div><!-- .post-details -->                  
          </div>                  
        </article>

    <?php endwhile; ?>
    
    <?php wp_pagenavi();?>
    <?php //the_posts_navigation(); ?>            

<?php else : ?>

    <?php get_template_part( 'connect/loop', 'none' ); ?>

<?php endif; ?>