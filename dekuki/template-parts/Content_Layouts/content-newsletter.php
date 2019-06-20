<?php if( get_sub_field('input_box') ): ?>
        <section class="news-container pv6 ph5-ns ph3" style="background-image: linear-gradient(to bottom, <?php the_sub_field('post_three_background_1'); ?> 50%, <?php the_sub_field('post_three_background_2'); ?> 50%);">
            <div class="news-text relative ph7 flex items-center justify-center vh-100-l vh-75-m vh-50 cover bg-center"style="<?php if( get_sub_field('post_three_image')): ?> 
                background-image: url(<?php the_sub_field('post_three_image'); ?>); <?php endif;?>">
                <div class="flex justify-center" style="color:<?php the_sub_field('post_three_text_color'); ?>">
                    <div class="divider-text tc" style="color: <?php the_sub_field('post_three_text_color'); ?> ">
                        <?php the_sub_field('post_three_text'); ?>	
                        <div class="mh5-ns mh0">
                            <div id="mc_embed_signup">
                                <form action="https://dekuki.us20.list-manage.com/subscribe/post?u=50615e129d2e8b37df5aa63d7&amp;id=56c4c15d32" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="news-form w100 mh5 validate" target="_blank" novalidate>
                                    <div class="relative mt5-l mt3 h-100-l w-100-l">
                                        <div class="mmc-field-group">
                                            <input class="required email dekuki-form apercu w-100 pv3-ns pv2 pl3-ns pl2 ttu border f6" style="color: <?php the_sub_field('post_three_text_color'); ?>; border: 0.5px solid <?php the_sub_field('post_three_text_color'); ?>"  type="email" placeholder="Enter your email here" name="EMAIL" id="mce-EMAIL" >
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_50615e129d2e8b37df5aa63d7_56c4c15d32" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button submit icon-arrow absolute right-0 pr4-ns pr3 h1" style="background-image: url(<?php bloginfo('template_directory');?>/assets/arrow_dark.svg)"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    `			</div>	
            </div>
        </section>
<?php else: ?>
        <section class="pv6-ns pv5 ph5-ns ph3" style="background-image: linear-gradient(to bottom, <?php the_sub_field('post_three_background_1'); ?> 50%, <?php the_sub_field('post_three_background_2'); ?> 50%) ">
            <div class="news-text relative ph7 flex items-center justify-center vh-100-l vh-75-m vh-50 cover bg-center"style="<?php if( get_sub_field('post_three_image')): ?> 
            background-image: url(<?php the_sub_field('post_three_image'); ?>); <?php endif;?>">
                <div class="flex justify-center items-center" style="color:<?php the_sub_field('post_three_text_color'); ?>">
                    <div class="divider-text tc"style="color: <?php the_sub_field('post_three_text_color'); ?> ">
                            <?php the_sub_field('post_three_text'); ?>	
                    </div>
                    <div class="absolute divider-logo mt3">
                        <hr class="h5-l h4" style="background-color: <?php the_sub_field('post_three_vertical_line_color'); ?>">
                        <div>
                            <img class="line-logo mt3" src="<?php the_sub_field('post_three_logo'); ?>"/>	
                        </div>
                    </div>
            `	</div>	
            </div>
        </section>
<?php endif;?>