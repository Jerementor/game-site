<?php 

/**
 * The template for displaying all pages
 * Template Name: Grey - Top Padding (60)
 *
 * @package GameMembership
 * @since 1.0
 */

get_header(); 

?>
<!-- Grey - Top Padding (60).php -->
<div class="section_holder_grey">
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