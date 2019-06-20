<div class="pt5 ph5-m ph2 pb5"style="background-color:<?php the_field('explore_background_color');?>">
    <h2 class="platform explore-title f1-l f2-m center tc mt3 ttc 1h-title" style="color: <?php the_field('explore_text_color');?>">
        <?the_field('explore_title');?>
    </h2>
    <div class="flex flex-wrap flex-row justify-between ma0-ns ma3">
    <?php

// organise our options into a data object
$args = array(
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'category_name' => 'blog',
    //   here we make sure to exclude the current post 
    'post__not_in'=> array($post->ID)
);
// a variable with our query and options
$query = new WP_Query( $args );
// do a loop with our new query code 
if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
  <!-- code as we’re used to already! --> 
  <a href="<?php the_permalink();?>" class="db link w-100 w-third-ns mb3-ns ph4-l ph2 pt6-l pt5-m pt4 mb0">
  <!-- here we createa 3x4 aspect ratio box -->
  <div class="aspect-ratio aspect-ratio--3x4">
    <div class="aspect-ratio--object bg-center cover flex items-center justify-center explore" style="background-image: url(<?php the_field('hero_image'); ?>)">
            <p class="platform f3 link">
            <?php the_title(); ?>
            </p>
    </div>
</div>
</a>
 

<?php endwhile; endif; ?>
    
    </div>

</div>