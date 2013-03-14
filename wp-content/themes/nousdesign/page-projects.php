<?php
/**
 * Template Name: Projects
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>

  <div class="row-fluid page-projects">
    <div class="span12">
      <?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
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
        ?>
        <div class="project-carousel">
          <ul>
            <?php if($images){ ?>
              <?php foreach($images as $image){ ?>
                <li>
                  <img src="<?php echo $image->guid; ?>"/>
                  <h3><?php the_title(); ?></h3>
                  <a class="credits" href="<?php echo get_post_meta($image->ID , '_wp_attachment_image_alt', true); ?>">
                    <?php echo $image->post_excerpt; ?>
                  </a>
                </li>
              <?php } ?>
            <?php } ?>
          </ul>
        </div>

      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>