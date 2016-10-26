<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">

    <header id="header">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-4">
              <div class="top-number"><p><i class="fa fa-phone-square"></i>  <a href="tel:<?php echo get_theme_mod('cl_phone'); ?>"><label><?php echo get_theme_mod('cl_phone'); ?></label></a></p></div>
            </div>
            <div class="col-sm-6 col-xs-8">
             <div class="social">
              <ul class="social-share">

               <?php 
               $fb = get_theme_mod("facebook_setting"); 
               $tweet = get_theme_mod("twitter_setting"); 
               $skype = get_theme_mod("skype_setting"); 
               $linkedin = get_theme_mod("linkedin_setting"); 
               $dribble = get_theme_mod("dribble_setting"); 
               ?>
                    <?php if(!empty($fb)): ?>
                 <li><a href="<?php echo $fb; ?>"><i class="fa fa-facebook"></i></a></li>
              <?php endif; ?>
              <?php if(!empty($tweet)): ?>

                <li><a href="<?php echo $tweet; ?>"><i class="fa fa-twitter"></i></a></li>
              <?php endif; ?>
              <?php if(!empty($linkedin)): ?>
                <li><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
              <?php endif; ?>
              
              <?php if(!empty($dribble)): ?>
                <li><a href="<?php echo $dribble; ?>"><i class="fa fa-dribbble"></i></a></li>
              <?php endif; ?>
              <?php if(!empty($skype)): ?>
                <li><a href="<?php echo $skype; ?>"i class="fa fa-skype"></i></a></li>
              <?php endif; ?>       
            </ul>
            <div class="search">
              <form role="form">
                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                <i class="fa fa-search"></i>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.container-->
  </div><!--/.top-bar-->

  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('site_mobile_logo'); ?>" alt="logo"></a>
      </div>
      
      <div class="collapse navbar-collapse navbar-right">
       <!-- <ul class="nav navbar-nav"> -->
       <?php
       $args = array( 'menu' => 'primary',
        'menu_class' =>'nav navbar-nav',
        );
       wp_nav_menu( $args );      
       ?><!-- </ul> -->

     </div>
   </div><!--/.container-->
 </nav><!--/nav--> 
</header>
<div id="content" class="site-content">
