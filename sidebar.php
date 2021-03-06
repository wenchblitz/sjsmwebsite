<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sjsmwebsite
 */

/*

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}


*/
?>

<aside id="sidebar-content" class="col-lg-4 col-md-4">

    <?php get_search_form(); ?>

    <div class="widget">
        <header>
            <h3>Events Archives</h3>
        </header>

        <div>
            <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
              <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
              <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
            </select>                
        </div>                        
    </div><!--WIDGET 1-->
    
    <div class="widget">
        <header>
            <h3>Recent Activities</h3>
        </header>

        <div>
            <ul class="recent-activity">
                <?php
                    //$recent_posts = wp_get_recent_posts();
                    //foreach( $recent_posts as $recent ){
                        //echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                    //}
                    
                    get_archives('postbypost', '5');
                ?>
            </ul>
        </div>                        
    </div><!--WIDGET 1-->    
       
    <div class="widget">
        <header>
            <h3>Categories</h3>
        </header>

        <div>
            <!--<ul><?php //wp_list_categories(); ?></ul>-->
            <ul>
                <?php wp_list_cats(); ?>
            </ul>
        </div>                        
    </div><!--WIDGET 1-->
    
    <div class="widget">
        <header>
            <h3>Like Our Facebook Page</h3>
        </header>
        
        <div>
            <div id="container" style="width:100%; max-width: 360px;">  
                <div class="fb-page" data-href="http://www.facebook.com/sjsofmactan" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/sjsofmactan"><a href="http://www.facebook.com/sjsofmactan">St. Joseph's School of Mactan</a></blockquote></div></div>
            </div>
        </div>     
    </div><!--WIDGET 3-->     

</aside><!--#sidebar-content-->