<!DOCTYPE html>
<html id="html">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <?php $isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
      if ( $isiPad ) { ?>
        <meta name="viewport" content="width=device-width, initial-scale=0.78367346938">
      <?php } else { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0;">
    <?php } ?>

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/theme.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-home.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-nousdesign.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-services.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-projects.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-contact.css" rel="stylesheet"> 

    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ios.css" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px), only screen and (min-device-width : 320px) and (max-device-width : 480px)" rel="stylesheet"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.fittext.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.hammer.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

    <!-- Responsive Media queries for IE6-8 -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="mobile-check"></div>
    <div id="ios-check"></div>

    <div id='mobile-stick' class="mobile-show">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <a class="brand logo" href="<?php echo site_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            <ul class="nav">
              <li class="nav-nous">
                <a href="<?php echo site_url(); ?>/nous-design/">NousDesign</a>
              </li>
              <li class="nav-services">
                <a href="<?php echo site_url(); ?>/services/">Services</a>
              </li>
              <li class="nav-projects">
                <a href="<?php echo site_url(); ?>/projects/">Projects</a>
              </li>
              <li class="nav-contact">
                <a href="<?php echo site_url(); ?>/contact-us/">ContactUs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="mobile-wrapper">
      <div id="wrapper">
        <div id="wrapper-margin">

          <div class="navbar navbar-fixed-top mobile-hide">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand logo" href="<?php echo site_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                <ul class="nav">
                  <li class="nav-nous">
                    <a href="<?php echo site_url(); ?>/nous-design/">NousDesign</a>
                  </li>
                  <li class="nav-services">
                    <a href="<?php echo site_url(); ?>/services/">Services</a>
                  </li>
                  <li class="nav-projects">
                    <a href="<?php echo site_url(); ?>/projects/">Projects</a>
                  </li>
                  <li class="nav-contact">
                    <a href="<?php echo site_url(); ?>/contact-us/">ContactUs</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>