<section class="collection-slider pt4 pb7-ns pb5 w-100" style="background-color: <?php the_sub_field ('gallery_background_color');?>">
    <div class="slider-cont">
    <?php $images = get_sub_field('gallery'); if( $images ): ?>
            <div class="carousel-container main-carousel">
                <?php foreach( $images as $image ): ?>
                        <div class="ma0 gallery-slide">
                            <div class="bg-center cover vh-75 list"style="background-image: url(<?php echo $image['url']; ?>)" alt="<?php echo $image['url']; ?>"></div>
                        </div>
                    <?php endforeach; ?>
            </div>    
    <?php endif;?>
    </div>
</section>