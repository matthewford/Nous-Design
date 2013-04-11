<?php
/**
 * Template Name: Projects
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>

  <div class="container-fluid projects-container">
    <div class="row-fluid page-projects">
      <div class="span12">
        <?php 
          $the_query = new WP_Query( 'posts_per_page=-1' );
          $all_images = array();

          while ( $the_query->have_posts() ) : $the_query->the_post();
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
                  "title"   => get_the_title(),
                  "image"   => $image->guid,
                  "credits" => $image->post_excerpt
                ));
              }
            }

          endwhile; 
        ?>

        <?php if(count($all_images) > 0){ ?>
          <div class="project-carousel-container">
            <a data-jcarousel-control="true" data-target="-=1" href="#" class="carousel-control carousel-control-prev"><span>&lsaquo;</span></a>
            <a data-jcarousel-control="true" data-target="+=1" href="#" class="carousel-control carousel-control-next"><span>&rsaquo;</span></a>
            <div class="project-carousel">
              <ul>
                <?php foreach($all_images as $image_item){ ?>
                  <li>
                    <div class="project-image-container">
                      <div class="project-image">
                        <?php if( strlen($image_item['credits']) > 0 ){ ?>
                          <a href="<?php echo get_post_meta($image_item['id'] , '_wp_attachment_image_alt', true); ?>">
                            <img src="<?php echo $image_item['image']; ?>"/>

                            <h3><?php echo $image_item['title']; ?></h3>
                            <span class="credits">
                              <?php echo $image_item['credits']; ?>
                            </span>
                          </a>
                        <?php }else{ ?>
                          <img src="<?php echo $image_item['image']; ?>"/>

                          <h3><?php echo $image_item['title']; ?></h3>
                        <?php }; ?>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>