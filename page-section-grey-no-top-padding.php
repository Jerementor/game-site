<?php 

/**
 * The template for displaying all pages
 * Template Name: Grey - No Top Padding (Main)
 *
 * @package GameMembership
 * @since 1.0
 */

get_header(); 

?>
<!-- Grey - No Top Padding (Main).php -->

<div class="section_holder_grey">
<div class="section-no-top-padding">
<div class="w-container">
<div class="tgc_div">

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