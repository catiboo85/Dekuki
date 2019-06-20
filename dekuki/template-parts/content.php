<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dekuki
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part('template-parts/content_layouts/content-hero'); ?>
	
<?php if( have_rows('content_one') ): while ( have_rows('content_one') ) : the_row();
  

  		if( get_row_layout() == 'post_one' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-logo'); ?>

		<?php elseif( get_row_layout() == 'post_two' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-button'); ?>
	
		<?php elseif( get_row_layout() == 'post_three' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-newsletter'); ?>	
	
		<?php elseif( get_row_layout() == 'post_four' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-text_button'); ?>
	
		<?php elseif( get_row_layout() == 'post_five' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-bleed_image'); ?>
	
		<?php elseif( get_row_layout() == 'post_seven' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-column_text'); ?>
	
		<?php elseif( get_row_layout() == 'post_eight' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-portrait'); ?>
		
		<?php elseif( get_row_layout() == 'post_nine' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-image_line'); ?>

		<?php elseif( get_row_layout() == 'gallery' ): ?>
			<?php get_template_part('template-parts/content_layouts/content-carousel'); ?>
		
		<?php elseif( get_row_layout() == 'picture_gallery' ): ?>
		<?php get_template_part('template-parts/content_layouts/content-gallery'); ?>
			
		<?php endif; 
	endwhile; endif; ?>

<?php if ( has_category( 'collection_main')):?>

<?php get_template_part('template-parts/content_layouts/content-explore'); ?>

<?php elseif(has_category('blog_main')): ?>
<?php get_template_part('template-parts/content_layouts/content-explore2'); ?>

<?php endif; ?>

	

	<footer class="entry-footer">
		<!-- <?php dekuki_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
