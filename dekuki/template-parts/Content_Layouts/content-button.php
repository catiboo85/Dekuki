<?php if( get_sub_field('post_direction') ): ?>
    <section class="style-one style-two pt7-l pt6-m pt5 pt4 pb5 ph5-ns flex flex-row-ns flex-column-reverse justify-between-ns items-end-ns items-center justify-center" style="background-color: <?php the_sub_field('post_two_background_color'); ?>">
        <div class="ml6-l ml5-m ml0 mb5-l mb4 mt0-ns mt4 flex flex-column items-start-ns items-center w-50-ns w-100 mt0-ns mt4" style="color:<?php the_sub_field('post_two_text_color'); ?>">
            <h3 class="left-text ttc tracked w-80 tl-ns tc 1h-title mv3">
                <?php the_sub_field('post_two_subheader_text'); ?>
            </h3>
            <div>
                <hr class="horizontal-line w2" style="border: 0.5px solid <?php the_sub_field('post_six_line_color'); ?>">
            </div>
                <p class="tracked w-80 tl-ns tc mt3 mb4">
                    <?php the_sub_field('post_two_body_text'); ?>
                </p>
            <div>
                <?php $link = get_sub_field('post_two_button'); ?>

                <?php if($link): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="f7-l mt3 lh-copy dib w-100 h-30 link bg-transparent ba pv2 ph5 tc ttu button" style="color:<?php the_sub_field('post_two_text_color'); ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>	
            </div>				
        </div>
        <div class="flex justify-center items-center w-50-ns w-100 mt0-ns mt4 mr2">
            <div class="image-position relative w-90-l w-100 h9-l h-100">
            <?php if( get_sub_field('post_two_bottom_image') ):?> 
                <img class="image-bottom front absolute bottom-0 right-0 w-100-l w-80 h-auto-l h-70" src="<?php the_sub_field('post_two_bottom_image'); ?>">
            <?php endif;?>   
                <img class=" image-top absolute bottom-1 right-2 h6 w-auto" src="<?php the_sub_field('post_two_top_image'); ?>"/>	
            </div>
        </div>
    </section>
    
<? else: ?>

    <section class="style-one style-two pt7-l pt6-m pt5 pb5 ph5-ns flex flex-row-ns flex-column justify-between-ns items-end-ns items-center justify-center" style="background-color: <?php the_sub_field('post_two_background_color'); ?>">
        <div class=" flex justify-center items-center w-50-ns w-100">
            <div class="image-position relative w-90-l w-100 h9-l h-100">
            <?php if( get_sub_field('post_two_bottom_image') ):?> 
                <img class="image-bottom front absolute bottom-0 left-0 w-100-l w-80 h-auto-l h-70" src="<?php the_sub_field('post_two_bottom_image'); ?>">
                <?php endif;?>
                <img class="image-top absolute bottom-1 left-2 h6 w-auto" src="<?php the_sub_field('post_two_top_image'); ?>"/>	
            </div>    
        </div>
        <div class="ml6-l ml4-m ml0 mb5-l mb4 mt0-ns mt4 flex flex-column items-start-ns items-center w-50-ns w-100  items-start-ns items-center 50-ns mt0-ns mt4" style="color:<?php the_sub_field('post_two_text_color'); ?>">
            <h3 class="left-text ttc tracked w-80 tl-ns tc 1h-title mv3">
                <?php the_sub_field('post_two_subheader_text'); ?>
            </h3>
            <div>
                <hr class="horizontal-line w2" style="border: 0.5px solid <?php the_sub_field('post_two_line_color'); ?>">
            </div>
            <p class="tracked w-80 tl-ns tc mt3 mb4">
                <?php the_sub_field('post_two_body_text'); ?>
            </p>

            <div>
                <?php $link = get_sub_field('post_two_button'); ?>

                <?php if($link): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="f7 mt3 lh-copy dib w-100 h-30 link bg-transparent ba pv2 ph5 tc ttu button" style="color:<?php the_sub_field('post_two_text_color'); ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>	
            </div>				
        </div>
    </section>
<? endif;?>    