<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newmedia-marketplace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>New Media Marketplace Theme - To feature and distribute artist's digital music and merchandise</title>
  <meta name="description" content="Music, Musician, Bootstrap" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
  
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="app dk" id="app">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'newmedia-marketplace' ); ?></a>

<!-- ############ LAYOUT START-->

  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<header id="masthead" class="site-header">
    <div class="app-header navbar-md black box-shadow-z1">
        <div class="navbar" data-pjax>
              <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                <i class="material-icons">menu</i>
              </a>
              <div class="site-branding">
              <!-- brand -->

               <a href="index.html" class="navbar-brand md">
              <img src="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/logo.svg" alt="Aetheron Media" id="logo">
              </a>
              <!-- / brand -->
              </div><!-- .site-branding -->
      

              <!-- nabar right -->
              <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                  <a href="/signup/" class="nav-link">
                    Signup
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/signin/" class="nav-link">
                    <span class="btn btn-sm rounded primary _600">
                      Signin
                    </span>
                  </a>
                </li>
              </ul>
              <!-- / navbar right -->
      
      <nav id="site-navigation" class="main-navigation">
              <!-- navbar collapse -->
              <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav nav-md inline text-primary-hover">
                  <li class="nav-item">
                    <a href="/music/" class="nav-link">
                      <span class="nav-text">Music</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/podcasts/" class="nav-link">
                      <span class="nav-text">Podcasts</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/video/" class="nav-link">
                      <span class="nav-text">Video</span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="/books/" class="nav-link">
                      <span class="nav-text">Books</span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="/photography/" class="nav-link">
                      <span class="nav-text">Photography</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/graphics/" class="nav-link">
                      <span class="nav-text">Graphics</span>
                    </a>
                  </li>
                    <li class="nav-item">
                    <a href="/merchandise/" class="nav-link">
                      <span class="nav-text">Merchandise</span>
                    </a>
                  </li>
                </ul>
                <!-- / link and dropdown -->
              </div>
              <!-- / navbar collapse -->
        </div>
        		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    </div>
    <div class="app-body">
