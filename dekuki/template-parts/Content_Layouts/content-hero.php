<!-- here needs a background-image on it -->
<section class="hero-container nav-toggle hero vh-100-ns cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ):?> 
	background-image: url(<?php the_field('hero_image'); ?>);<?php endif; ?>">
		<div class="hero-content flex items-center justify-center w-100">
			<!-- If no image is added to the 'subhead' 
			custom field then the title of the post will be chown -->
			<?php if( get_field( 'logo' ) ): ?>
				<img class="logo w-75" src="<?php the_field('logo'); ?>" />
               <?php else: ?>
               <h1 class="header-title mt4-ns mt2 mb0 mh0 platform-medium ttu tc"><?php the_title();?></h1>
               <?php endif; ?>    
		</div>
</section>