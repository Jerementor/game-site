<?php 

/**
 * The template for displaying all blog posts
 *
 *
 * @package Platformer
 * @since 1.0
 */

get_header(); 

?>
<div class="section_holder_grey">
<div class="section-no-top-padding">
<div class="w-container">
<div class="tgc_div">
 <div class="tgc_blog_container">    
    <h2 class="tgc_cta"><?php wp_title(''); ?></h2>
      <?php
        			if ( have_posts() ) :

        				while ( have_posts() ) : the_post();
        
        			        the_content();
                    //   comments_template();
        				endwhile;
        
        			endif;
      ?>

</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
