<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dekuki
 */

get_header();
?>

		<?php
    
    $args = array(
		'post_type' => 'post',
        'posts_per_page' => 1, 
        'category_name' => 'home_page',
        // possibly more arguments here
    );

    // set up new query
    $query = new WP_Query( $args );

    // loop through found posts
	if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
	
	$post = get_the_ID();

	get_template_part( 'template-parts/content', get_post_type() );
	
endwhile; endif;
	
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>






