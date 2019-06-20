<section class="pb6-ns pb5 pt0-ns pt3 ph0-ns ph3" style="background-color: <?php the_sub_field('post_five_background_color');?>">
    <div class="relative flex items-center justify-center vh-100-ns vh-50 cover bg-center"style="<?php if( get_sub_field('post_five_image')): ?> 
    background-image: url(<?php the_sub_field('post_five_image'); ?>); <?php endif;?>">
        <div class="absolute divider-logo">
            <hr class="h5-ns h4" style="background-color: <?php the_sub_field('post_five_line_color'); ?>">
            <div>
                <img class="line-logo mt3-ns mt2" src="<?php the_sub_field('post_five_logo'); ?>"/>	
            </div>
        </div>
    </div>
</section>