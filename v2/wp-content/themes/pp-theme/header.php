<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
	  <meta name="application-name" content="<?php bloginfo('name'); ?>">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Kodr Indonesia">
    <link rel="icon" href="favicon.ico">

    <title><?php echo get_bloginfo('name'); ?></title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/select2/select2.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  
  <body class="<?php echo using_front_page()?>">  
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1256840684405652',
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <nav id="nav" class="navbar navbar-inverse">
      <div class="main-navigation">
        <a href="javascript:void(0)" id="btn-close-menu" class="btn-close">x</a>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
  			     <?php 
              wp_nav_menu(
      					array(
      						'theme_location' => 'primary',
      						'container_class' => '',
      						'menu_class' => '',
      						'fallback_cb' => '',
      						'menu_id' => 'top-bar'
      					)); 
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="navbar-header">
              <button type="button" id="btn-open-menu" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>
			
          </div>
          <div class="col-md-6 hidden-xs">
            <div class="social-icons text-right">
              <ul>
                <?php echo get_template_part('template/partials/social','media'); ?>
                <li><a href="#"><i class="fa fa-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>