<?php 

/**
 * The template for displaying all pages
 * Template Name: Grey - No Top (Header)
 *
 * @package GameMembership
 * @since 1.0
 */

get_header(); 

?>
<!-- Grey - No Top (Header).php -->

<div class="section_holder_grey">
<div class="section-no-top-padding">
<div class="w-container">
<div class="tgc_div">
<h1><?php wp_title('') ?></h1>	
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

<?php if (strpos($_SERVER['REQUEST_URI'], "entry") !== false) : ?>
<div class="section">
	<div class="w-container">
		<div class="tgc_div">
        	<?php get_template_part('template-parts/comments/disqus'); ?>
		</div>
	</div>
</div>
<?php endif; ?>


</div>
<?php get_footer();