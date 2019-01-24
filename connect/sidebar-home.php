<aside id="sidebar-content" class="col-lg-4 col-md-4">

    <!--<div class="widget">
        <header>
            <h3>Follow Us</h3>
        </header>

        <div id="FollowUs-aside">
            <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>YouTube</li>
                <li>Instagram</li>
                <li>RSS Feeds</li>                            
            </ul>
        </div>                        
    </div><!--WIDGET 1-->
    
    <?php get_search_form(); ?>
    
    <!--<div class="widget">
        <header>
            <h3>Latest Updates</h3>
        </header>

        <div>
            <ul>                                                   
                <li><center><a href="http://sjsm.edu.ph/spg-ssg-election-results/"><strong>SPG and SSG Election Results</strong></a></center></li>            
                <li><center><a href="http://sjsm.edu.ph/official-sectioning-2016/"><strong>Official Sectioning</strong></a></center></li>
                <li><center><a href="http://sjsm.edu.ph/class-schedule-2016/"><strong>Class Schedule for Nursery - Grade 10</strong></a></center></li>  
                <li><center><a href="http://sjsm.edu.ph/grade-11-class-schedule/"><strong>Class Schedule for Senior High School</strong></a></center></li>                
            </ul>
        </div>                        
    </div>--><!--WIDGET 1-->  

    <!--<div class="container-fluid view-all-events">
        <div class="row">
            <a href="http://sjsm.edu.ph/outgoing-pta-president-speech/" class="col-lg-12 col-md-12 col-xs-12 btn btn-success"><strong>Mr. Leo Senerpida's Welcome Address</strong></a>
        </div>        
    </div>-->

    <div class="widget">
        <header>
            <h3>Announcement & Upcoming Events</h3>
        </header>
      
        <div>
            <?php if ( is_active_sidebar( 'sidebar-events' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-events' ); ?>
            <?php endif; ?>
        </div>   
                   
    </div><!--WIDGET 2-->

    

    <div class="container-fluid view-all-events">
        <div class="row">
            <a href="http://sjsm.edu.ph/events/" class="col-lg-12 col-md-12 col-xs-12 btn btn-info" role="button"><strong>View All Events</strong></a>
        </div>        
    </div>        
    
    
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