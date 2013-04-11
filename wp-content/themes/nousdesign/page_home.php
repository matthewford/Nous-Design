<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>
  <div class="container-fluid home-container">
    <div class="home-carousel">
      <ul>
        <li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-1.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-2.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-3.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-4.jpg">
        </li>
        <li>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-5.jpg">
        </li>
      </ul>
    </div>
    <div class="home-carousel-text">
      <ul>
        <li class="large nous nousdesign_1">
          Nous
        </li>
        <li class="large design nousdesign_2">
          Design
        </li>
        <li class="small nous nousdesign_3">
          Nous
        </li>
        <li class="small design nousdesign_4">
          Design
        </li>
        <li class="large nous nousdesign_1 second">
          Nous
        </li>
        <li class="large design nousdesign_2 second">
          Design
        </li>
        <li class="small nous nousdesign_3 second">
          Nous
        </li>
        <li class="small design nousdesign_4 second">
          Design
        </li>
      </ul>
    </div>
  </div>

<?php get_footer(); ?>