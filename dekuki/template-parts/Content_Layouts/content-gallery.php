<section>
	<div class="container flex flex-wrap center ph4-l ph0 pv6-l pv4" style="background-color:<?php the_sub_field('picture_gallery_background'); ?>">
	<?php $images = get_sub_field ('picture_gallery'); ?>
		<?php foreach($images as $image) :?>
		<!-- here we have added our custom field to our attachments (images)
		which affs a class name to control the width of the image -->
			<div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']); ?>">
				<?php echo wp_get_attachment_image($image['id'], 'full');?>
		
			<?php $caption = wp_get_attachment_caption ($image['id']); ?>
				<?php if(!empty($caption)):?>
					<p class="caption f6 o-50 pt3 mv0 pb3 light" style="color:<?php the_sub_field('caption_color'); ?>">
						<?php echo $caption; ?>
					</p>
				<?endif; ?>
			</div>	
		<?php endforeach;?>
	</div>
</section>
