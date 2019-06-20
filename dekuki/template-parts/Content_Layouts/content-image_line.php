<?php if( get_sub_field('direction') ): ?>
<section style="background-color: <?php the_sub_field('post_nine_background_color'); ?>">
	<div class="line-container pv5-ns pv4 ph5-l ph4-m flex flex-row-reverse items-center justify-between">
		<div class="kuki-box relative">
			<hr class="kuki-line absolute z-1" style="border: 0.5px solid  <?php the_sub_field('post_nine_line_color'); ?>">
			<img class="kuki-image mr5-l mr4-m mr0" src="<?php the_sub_field('post_nine_image'); ?>"/>	
		</div>
		<div class="w-40 ml5-l ml4-m kuki-text tl" style="color: <?php the_sub_field('post_nine_text_color'); ?>">
			<?php the_sub_field('post_nine_text'); ?>
		</div>
	</div>		
</section> 
<?php else: ?> 
<section style="background-color: <?php the_sub_field('post_nine_background_color'); ?>">
	<div class="line-container pv5-ns pv4 ph5-l ph4-m flex flex-row items-center justify-between">
		<div class="kuki-box relative">
			<hr class="kuki-line-2 absolute z-1" style="border: 0.5px solid  <?php the_sub_field('post_nine_line_color'); ?>">
			<img class="kuki-image ml5-l ml4-m ml0" src="<?php the_sub_field('post_nine_image'); ?>"/>	
		</div>
		<div class="w-40 kuki-text-2 tl mr5-l mr4-m " style="color: <?php the_sub_field('post_nine_text_color'); ?>">
				<?php the_sub_field('post_nine_text'); ?>			
		</div>
	</div>		
</section>
	
<?php endif; ?>
