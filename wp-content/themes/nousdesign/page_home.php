<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>
  <?php 
    $all_images = array();

    if ( have_posts() ) : while ( have_posts() ) : the_post();
      $args = array(
        'numberposts' => -1, // Using -1 loads all posts
        'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
        'order'=> 'ASC',
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
        'post_status' => null,
        'post_type' => 'attachment'
      );

      $images = get_children( $args );

      if($images){
        foreach($images as $image){
          array_push( $all_images, array(
            "id"      => $image->ID,
            "title"   => $image->post_title,
            "image"   => $image->guid
          ));
        }
      }

    endwhile; endif;
  ?>
  <div class="container-fluid home-container">
    <div class="home-carousel">
      <ul>
        <?php foreach($all_images as $image_item){ ?>
          <li>
            <img src="<?php echo $image_item['image']; ?>" alt="<?php echo $image_item['title']; ?>" title="<?php echo $image_item['title']; ?>"/>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="home-carousel-text home-carousel-text-right">
      <ul>
        <li class="large nous nousdesign_1">
          Nous
        </li>
        <li class="small design nousdesign_4">
          Design
        </li>
      </ul>
    </div>
    <div class="home-carousel-text home-carousel-text-left">
      <ul>
        <li class="large design nousdesign_2">
          Design
        </li>
        <li class="small nous nousdesign_3">
          Nous
        </li>
      </ul>
    </div>
  </div>

<?php get_footer(); ?>