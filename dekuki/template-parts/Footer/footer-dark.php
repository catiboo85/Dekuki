<div class="site-info-a flex align-start justify-between db pt5 ph5 pb4 light-color">
				<div class="flex flex-column justify-between ">
					<a class="footer-logo" href="<?php echo get_site_url(); ?>">
						<img src="<?php bloginfo('template_directory');?>/assets/light_wordmark_outline.svg">
					</a>
					<div class="footer-cont flex items-center justify-between icon-container">
						<a href="https://www.instagram.com/thisisdekuki/" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory');?>/assets/instagram.svg" class="db">
						</a>
						<a  href="https://twitter.com/thisisdekuki" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory');?>/assets/twitter.svg" class="db">
						</a>
						<a href="https://www.facebook.com/mariac.gonzalez99" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory')?>/assets/facebook.svg" class="db">
						</a>
						
					</div>
				</div>
				<div class="ttu link light light-color">
					<?php wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'menu_class'	=> 'footer-menu-dark footer-menu list link'
						) );
					?>
				</div >
				<div class="ttu link flex flex-column light light-color">
					<?php wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'footer2-menu',
					'menu_class'	=> 'footer-menu-dark footer-menu list link'
						) );
					?>
				</div>
				<div class="footer-news-cnt flex flex-column justify-between items-start form light light-color">
					<div>
						<p class="footer-news light ma0 ttu">Subscribe</p>
					</div>
					
					<div id="mc_embed_signup">
						<form action="https://dekuki.us20.list-manage.com/subscribe/post?u=50615e129d2e8b37df5aa63d7&amp;id=56c4c15d32" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate footer-form w5" target="_blank" novalidate>
							<div class="mc-field-group">
								<div class="relative h-100 w-100">
									<input class="form-footer light w-100 pv3 ttu border f6" type="email" placeholder="Enter your email here" name="email" >	
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div> 
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_50615e129d2e8b37df5aa63d7_56c4c15d32" tabindex="-1" value=""></div>
								<div class="clear">	<input class="button icon-arrow-sm right--1 absolute pr3" value="" name="subscribe" id="mc-embedded-subscribe" style="background-image: url(<?php bloginfo('template_directory');?>/assets/arrow_light.svg)"></div>
							</div>
							</div>		
						</form>
					</div>
					<div class="bottom-icon icon-container">
						<a href="https://www.instagram.com/thisisdekuki/" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory');?>/assets/instagram.svg" class="db">
						</a>
						<a  href="https://twitter.com/thisisdekuki" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory');?>/assets/twitter.svg" class="db">
						</a>
						<a href="https://www.facebook.com/mariac.gonzalez99" class="w1 mh3 mv2">
							<img src="<?php bloginfo('template_directory')?>/assets/facebook.svg" class="db">
						</a>
					</div>
					<div>
						<p class="copyright light ma0-l mt4 ttu">Copyright Dekuki</p>
					</div>	

				</div>
			</div><!-- .site-info -->