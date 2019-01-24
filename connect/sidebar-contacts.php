<aside id="sidebar-content" class="col-lg-4 col-md-4">
   
    <?php get_search_form(); ?>         
    
    <div class="widget">
        <header>
            <h3>Announcement & Upcoming Events</h3>
        </header>
      
        <div>
            <?php if ( is_active_sidebar( 'sidebar-events' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-events' ); ?>
            <?php endif; ?>
        </div>              
    </div><!--WIDGET 1-->
    
    <div class="widget">
        <header>
            <h3>Contact Us</h3>
        </header>

        <div>
            <ul>
                <li><div><strong>Phone:</strong> 340-5939</div></li>
                <li><div><strong>Fax:</strong> 341-2399</div></li>
                <li><div><strong>Cellphone:</strong> 0922 402 4230</div></li>                     
                <li><div><strong>Email:</strong> sjsofmactan@gmail.com</div></li>                        
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