<!-- SINGLE POST -->
          <?php while ( have_posts() ) : the_post(); ?>              
          <article  id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>
              <div class="row entry-content">                      
                  <div class="col-lg-12 col-md-12 single-post-details">

                      <section>
                        <header class="col-lg-12 col-md-12 entry-header">
                            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                            <?php if ( 'post' == get_post_type() ) : ?>
                            <div class="entry-meta">
                                <?php //sjsmwebsite_posted_on(); ?>
                            </div><!-- .entry-meta -->
                            <?php endif; ?>                                                
                        </header><!-- .entry-header -->

                        <article class="container-fluid">
                           <div class="row">
                               <div class="col-lg-12 col-md-12">
                                    <?php
                                    /* translators: %s: Name of current post */
                                the_content( sprintf(
                                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sjsmwebsite' ), array( 'span' => array( 'class' => array() ) ) ),
                                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );
                            ?>
                               </div>                               
                           </div>
                        </article>
                        
                        <footer class="entry-footer">
                            <?php //sjsmwebsite_entry_footer(); ?>
                            <?php get_the_author_link(); ?>                            
                        </footer><!-- .entry-footer -->                        
                     </section> 
                  </div><!--col 12 .post-details-->                                                
              </div><!--1st row-->              
              
            <!--START COMMENTS SECTION-->
            <!--
            <div class="row entry-content">
              <div class="col-lg-12 col-md-12">
                <?php
                    // *** If comments are open or we have at least one comment, load up the comment template
                    
                   // if ( comments_open() || get_comments_number() ) :
                   //     comments_template();
                   // endif;
                ?>
              </div>
            </div>--><!--2nd row-->
            <!--STOP COMMENTS SECTION-->
            
          </article><!--container-->
          <?php endwhile; // end of the loop. ?>              
          <!-- SINGLE POST -->

          <?php edit_post_link( esc_html__( 'Edit', 'sjsmwebsite' ), '<span class="edit-link">', '</span>' ); ?>