<?php 

/**
 * The template for the index page
 *
 *
 * @package GameMembership
 * @since 1.0
 */

get_header(); 

?>

<!-- Index.php -->
<div class="section_holder_grey">
<div class="section-no-top-padding">
<div class="w-container">
<div class="tgc_div">
    <?php single_post_title(); ?>
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_content();

				//
			} // end while
		} // end if
		?>
</div>
</div>
</div>
</div>
<?php get_footer();