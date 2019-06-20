
<section class="pt6 pb5 pr5-ns pr3 pl6-ns pl4" style="background-color: <?php the_sub_field('post_four_background_color'); ?>">
    <div class="ml6-l ml5-m ml3 flex flex-column items-start mr6-l mr5-m mr4 w-50-l w-60-m w-80" style="color:<?php the_sub_field('post_four_text_color'); ?>">
        <h2 class="collection-headline ttc tracked w-60 tl mv3">
            <?php the_sub_field('post_four_headline'); ?>
        </h2>
        <div class=" ml5-ns ml4 flex flex-column items-start">
            <p class="tracked w-80-l w-100 tl mt3 mb4">
                <?php the_sub_field('post_four_body_text'); ?>
            </p>

            <div>
                <?php $link = get_sub_field('post_four_button'); ?>

                <?php if($link): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="f7 mt3 lh-copy dib w-100 h-30 link bg-transparent ba pv2 ph5 tc ttu button" style="color:<?php the_sub_field('post_four_text_color'); ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>	
            </div>	
        </div>
    </div>
</section>