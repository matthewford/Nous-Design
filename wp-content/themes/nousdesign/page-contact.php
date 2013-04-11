<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>
  <div class="container-fluid contact-page-height">
    <div class="row-fluid page-contact centered">
      <div class="span12 content-text">
        <div class="contact-background">
          <em>Nous</em>
          <span>Design</span>
        </div>
        <div class="contact-foreground">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1>
              <em>Nous</em>Design
            </h1>
            <?php the_content(); ?>

          <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>