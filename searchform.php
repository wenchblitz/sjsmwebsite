<div class="widget">
    <header>
        <h3 id="hsearch">Search</h3>
    </header>
    
    <form id="isearch" role="search" method="get" action="<?php echo home_url('/'); ?>">
        <fieldset>
            <input type="text" placeholder="Keywords here..." name="s">
            <button type="submit" id="findme"><?php _e('Search'); ?></button>
        </fieldset>            
    </form>                      
</div><!--WIDGET 1-->
