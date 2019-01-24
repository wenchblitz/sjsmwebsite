<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sjsmwebsite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="St. Joseph's School of Mactan">
    <meta name="title" content="St. Joseph's School of Mactan">        
    <meta name="keywords" content="sjsm.edu.ph, sjsm, sjsofmactan, Catholic School, Religious School, St. Joseph's School of Mactan, St. Joseph, Josephian, SFIC, St. Francis, St. Francis of Assissi, Franciscan school, Franciscan Sisters, St. Joseph's School - Mactan, Mactan, Lapu-Lapu City, Acacia Road, Mactan, Lapu-Lapu City, Cebu 6015, agnes labitoria, editha radam, mercedes salud, mactan school, sjcqc">

    <title>Welcome to St. Joseph's School of Mactan</title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon"><!-- Icon Logo -->
    <link rel="image_src" type="image/jpeg" href="<?php bloginfo('stylesheet_directory'); ?>/images/sjsm-logo.jpg">    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/Normalize.css"><!-- Reset CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css"><!-- Bootstrap Core CSS --> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheet.css" type="text/css" charset="utf-8" /><!--robotolight-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"><!-- Custom CSS -->    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/jquery.bxslider/jquery.bxslider.css"><!--bxSlider CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/BebasNeueRegular-Regular.css"><!--Bebas CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/SegoeUI-Regular.css"><!--SegoeUI CSS-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<?php 

	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */

wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <!-- Preloader with Bootstrap Progress Bar -->
    <div class="loader">
      <div class="loader-container">
        <h3><b>Please wait while we are preparing the content!</b></h3>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-color" id="bar" role="progressbar" style="width: 0%;"></div>
        </div>
      </div>
    </div>   
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=443271375714375";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        jQuery(document).ready(function($) {
          $(window).bind("load resize", function(){  
          setTimeout(function() {
          var container_width = $('#container').width();    
            $('#container').html('<div class="fb-page" ' + 
            'data-href="http://www.facebook.com/sjsofmactan"' +
            ' data-width="' + container_width + '" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/IniciativaAutoMat"><a href="http://www.facebook.com/sjsofmactan">St. Joseph\'s School of Mactan</a></blockquote></div></div>');
            FB.XFBML.parse( );    
          }, 100);  
        }); 
        });
    </script>

<?php get_template_part('nav-menu'); ?>  
    
    <?php //get_template_part('connect/parallaxSlider'); ?>
    <?php //get_template_part('parallaxSlider'); ?>
    
    <div id="mainContent" class="container-fluid fade-in">
       <!--
        <div class="container">
            <div class="row">
            
            <main id="main-content" class="col-lg-8 col-md-8" role="main">
            -->            
            <!--#############################HEADER STOP IT HERE##################################-->
