<?php
/**
 * Template Name: NousDesign
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>

  <div class="container-fluid">
    <div class="row-fluid page-nousdesign">
      <div class="span12 content-text">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>