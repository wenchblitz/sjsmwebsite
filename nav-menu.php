<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content"> <!-- 'bs-example-navbar-collapse-1' -->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a id="sjsmLOGO" class="navbar-brand" href="<?php bloginfo('url');?>">SJSM Website</a>

            <div id="sjsmBranding">
                <h3>St. Joseph's School of Mactan</h3>
                <!--<label>Acacia Road, Mactan, Lapu-Lapu City, Cebu 6015</label>-->
                <div class="sjsm-contact-wrapper">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (032) 340 5939 &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 0922 402 4230
                </div>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 5,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'nav-content', /* 'nav-content' */
                'menu_class' => 'nav navbar-nav navbar-right',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()
                )
            );
        ?>                   
        <!-- /.navbar-collapse -->
        
    </div>
    <!-- /.container -->
</nav>