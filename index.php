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
<div class="section_holder_blank">
<div class="section-60-top-padding">
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
<?php get_footer();