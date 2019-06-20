<!-- specific to this component -->
<!-- here we grab the custom field of the category to be able to change the inline style color -->
<section class="style-one pt7-ns pt5 pb5-ns pb4 ph5 flex flex-row-ns flex-column-reverse items-end-ns justify-between-ns " style="background-color:<?php the_sub_field('post_one_background_color'); ?>">
    <div class="flex flex-column justify-center items-center w-50-ns w-100 pa3 mb5-l mb0 mt0-ns mt4">
        <div class="platform-light tracked w-60-ns w-100 1h-title f3-l f5 tc" style="color:<?php the_sub_field('post_one_text_color'); ?>"><?php the_sub_field('post_one_text'); ?></div>
            <hr class="v-line h3 mb3 mt3" style="background-color: <?php the_sub_field('post_one_line'); ?>">
            <img class="line-logo h-auto m2-s" src="<?php the_sub_field('post_one_logo'); ?>"/>
        </div>

    <div class="w-50-ns w-100 mt0-ns mt4">
        <div class="image-position relative w-80-l w-100 h9-l h-100 bg-center cover">
        <?php if( get_sub_field('post_one_bottom_image') ):?> 
            <img class="image-bottom front absolute bottom-0 right-0 w-100-l w-80 h-auto-l h-70" src="<?php the_sub_field('post_one_bottom_image'); ?>">
        <? endif;?>
        <img class="image-top absolute bottom-1 right-2 h6 w-auto" src="<?php the_sub_field('post_one_top_image'); ?>"/>	
        </div>
    </div>
    
</section>