<?php
/**
 * Template Name: Projects Original
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.1
 */

get_header(); ?>
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

  <div class="container-fluid projects-container">
    <div class="row-fluid page-projects">
      <div class="span12">

        <?php if(count($all_images) > 0){ ?>
          <div class="project-carousel-container">
            <a data-jcarousel-control="true" data-target="-=1" href="#" class="carousel-control carousel-control-prev"><span>&lsaquo;</span></a>
            <a data-jcarousel-control="true" data-target="+=1" href="#" class="carousel-control carousel-control-next"><span>&rsaquo;</span></a>
            <div class="project-carousel">
              <ul>
                <script>
                  // $(document).ready(function(){
                  //   var load_images = [];
                  //   var load_images_data = [];
                  //   //var order_img = [];
                  //   var index = 0;
                  //   <?php foreach($all_images as $image_item){ ?>
                  //     load_images.push("<?php echo $image_item['image']; ?>")
                  //     load_images_data.push({
                  //       "img_id": "<?php echo $image_item['id']; ?>",
                  //       "img_title": "<?php echo $image_item['title']; ?>",
                  //       "img_link": "<?php echo $image_item['image']; ?>",
                  //       "img_credits": "<?php echo $image_item['credits']; ?>",
                  //       "img_credits_link": "<?php echo get_post_meta($image_item['id'] , '_wp_attachment_image_alt', true); ?>"
                  //     })

                  //     $(".project-carousel ul").append('\
                  //       <li id="image_' +  index + '" ">\
                  //         <div class="project-image-container">\
                  //           <div class="project-image">\
                  //             <div class="js_wrap">\
                  //               <div class="image-container">\
                  //               </div>\
                  //               <h3 class="mobile-hide"></h3>\
                  //             </div>\
                  //           </div>\
                  //           <h3 class="mobile-show"></h3>\
                  //         </div>\
                  //       </li>'
                  //     );

                  //     index ++;
                  //   <?php } ?>

                  //   $('.project-carousel').jcarousel({
                  //     'wrap': 'circular',
                  //     'animation': {
                  //       'duration': 300,
                  //       'easing':   'linear'
                  //     }
                  //   });

                  //   //scales carousel
                  //   $('.project-carousel ul li .project-image-container').width($('.page-projects').width());
                  //   window.onresize = function(event) {
                  //     $('.project-carousel ul li .project-image-container').width($('.page-projects').width());
                  //   }

                  //   $.imageloader({
                  //     urls: load_images,
                  //     onComplete: function(images){
                  //       // when load is complete
                  //       //alert( order_img );
                  //     },
                  //     onUpdate: function(ratio, image){
                  //       // ratio: the current ratio that has been loaded
                  //       // image: the URL to the image that was just loaded
                  //       if(image){
                  //         var index = $('.project-carousel li').size();
                  //         for(var n = 0; n < load_images.length; n++){
                  //           if(image == load_images[n]){
                  //             //order_img.push(n);
                  //             $("#image_"+n).find(".image-container").append('<img src="' + image + '" alt="'+load_images_data[n].img_title+'" title="'+load_images_data[n].img_title+'" />')
                  //             $("#image_"+n).find("h3").text(load_images_data[n].img_title);


                  //             if(load_images_data[n].img_credits.length>0){
                  //               $('.project-carousel ul li:eq(' + n + ') .project-image .js_wrap').wrap('<a href="'+load_images_data[n].img_credits_link+'">').append("<span class='credits'>"+load_images_data[n].img_credits+"</span>");
                  //             }
                  //             $('.project-carousel ul li:eq(' + n + ')').attr("data-height", $('.project-carousel ul li:eq(' + n + ') img').height());
                  //             $('.project-carousel ul li:eq(' + n + ')').attr("data-width", $('.project-carousel ul li:eq(' + n + ') img').width());

                  //             break;
                  //           };
                  //         }
                  //       }
                  //     },
                  //     onError: function(err){
                  //       // err: error message if images couldn't be loaded
                  //     }
                  //   });
                  // });
                </script>
                <?php foreach($all_images as $image_item){ ?>
                  <li>
                    <div class="project-image-container">
                      <div class="project-image">
                        <?php if( strlen($image_item['credits']) > 0 ){ ?>
                          <a href="<?php echo get_post_meta($image_item['id'] , '_wp_attachment_image_alt', true); ?>">
                            <div class="image-container">
                              <img src="<?php echo $image_item['image']; ?>" alt="<?php echo $image_item['title']; ?>" title="<?php echo $image_item['title']; ?>" />
                            </div>
                            <h3 class="mobile-hide"><?php echo $image_item['title']; ?></h3>
                            <span class="credits">
                              <?php echo $image_item['credits']; ?>
                            </span>
                          </a>
                        <?php }else{ ?>
                          <div class="image-container">
                            <img src="<?php echo $image_item['image']; ?>" alt="<?php echo $image_item['title']; ?>" title="<?php echo $image_item['title']; ?>" />
                          </div>
                          <h3 class="mobile-hide"><?php echo $image_item['title']; ?></h3>
                        <?php }; ?>
                      </div>
                      <h3 class="mobile-show"><?php echo $image_item['title']; ?></h3>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    
    <div class="projects-carousel-text-container mobile-hide">
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
  </div>

<?php get_footer(); ?>