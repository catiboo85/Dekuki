<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dekuki
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer">
		<?php 
				$query = new WP_Query('posts_per_page=1');
				if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
					// get the id for our current post and store it in a variable
					$footer_post = get_the_ID();
					if (get_field('footer_color')):
					get_template_part('/template-parts/footer/footer-dark');
					else:
					get_template_part('template-parts/footer/footer-light');

					endif; endwhile; endif;?>
			

		</footer><!-- #colophon -->
	</div> <!-- #barba js -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
