<!DOCTYPE html>
<html id="html">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.fittext.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="wrapper-margin">

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