<?php 
/*
Template Name: Home
*/
get_header();
?>
<div id="homepage">
	<div class="banner-wrapper">
		<div class="container" id="banner-container">
			<div class="inner-row">
				<div class="col-sm-24">
					<div class="banner">
						<div class="banner-img banner-master cycle-slideshow"
							data-cycle-slides="> div.banner-slide"
							data-cycle-fx="fade"
							data-cycle-speed=1500
							data-cycle-timeout=4000
							data-cycle-manual-fx="fade"
							data-cycle-pager=".cycle-pager">
							<?php
							wp_reset_query();
							$banners = get_field('ztf_homepage_banners');
							if($banners) {
								$counter = 0;
								foreach($banners as $banner) { ?>
									<?php
										$image_url      = $banner['ztf_homepage_banners_image'];
										$long_image_url = $banner['ztf_homepage_banners_long_image'];
										$title          = $banner['ztf_homepage_banner_title'];
										$content        = $banner['ztf_homepage_banner_content'];
										$contenturl     = $banner['ztf_homepage_banner_content_url'];
									?>
								   	<div class="banner-slide" style="background-image: url('<?php echo $long_image_url; ?>');" data-desktop="<?php echo $long_image_url; ?>" data-mobile="<?php echo $image_url; ?>">
									    <div class="container container-banner-content">
											<div class="inner-row">
												<div class="col-md-24 col-banner-content banner-content-<?php echo $counter; ?>">
													<h1><?php echo $title; ?></h1>
													<!--<a href="<?php echo $contenturl; ?>">--><?php echo $content; ?><!--</a>-->
												</div>
											</div>
											<div class="controls">
												<div class="cycle-pager"></div>
											</div>
										</div>
										<div class="banner-anchor-wrapper">
											<a class="banner-anchor" href="#intelligent-personalized-learning"><img src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-banner-downarrow-2x.png" alt/></a>
										</div>
									</div>
									<?php $counter++; ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div><!-- End slider -->
			</div>
		</div>
	</div>
	<div class="section2-wrapper">
		<div class="container">
			<div class="row sec2-row1">
				<div class="col-md-24 s2-header">
					<a name="intelligent-personalized-learning"></a>
					<?php
						$s2Header    = apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section2_header', true));
						$s2SubHeader = apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section2_subheader', true));
						$s2Content   = apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section2_content', true));
						$s2LinkText  = apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section2_link_text', true));
						$s2LinkUrl   = get_post_meta($post->ID, 'ztf_hp_section2_link_url', true);
					?>
					<?php 
						echo $s2Header;
						echo $s2SubHeader;
					?>
				</div>
			</div>
			<div class="row sec2-row2">
				<div class="col-md-13 left-image">
					<img class="desktop s2-img"    src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-img-laptop-desktop.jpg" />
					<img class="mobileONLY s2-img" src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-img-laptop-mobile.jpg" />
				</div>
				<div class="col-md-11 right-content">
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section2_content', true)); ?>
					<!--<a href="<?php echo $s2LinkUrl; ?>"><?php echo $s2LinkText; ?></a>-->
				</div>
			</div>
		</div>
		<a class="sec3-anchor" href="#cognitive-computing"><img class="section-down-arrow" src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-icon-subbanner-blue-down-arrow-2x.png" alt/></a>
	</div>
	<div class="section3-wrapper" style="background: transparent url('<?php echo get_bloginfo('template_url'); ?>/images/homepage-banner-bench-2x.png') no-repeat center center; background-size: cover; height: 455px;">
		<a name="cognitive-computing"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-24">
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section3_content', true)); ?>
					<a class="sec4-anchor" href="#smarter-assessments"><img class="section-down-arrow" src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-icon-subbanner-grey-down-arrow-2x.png" alt/></a>
				</div>
			</div>
		</div>
	</div>
	<div class="section4-wrapper">
		<a name="smarter-assessments"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-15 right-content">
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section4_header', true)); ?>
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'ztf_hp_section4_content', true)); ?>
					<a href="mailto:info@knowmatters.com"><p class="end-arrow-pink">For more information on Knōwmatters, please contact info@knowmatters.com</p></a>
				</div>
				<div class="col-md-9 left-image">
					<img class="desktop s4-img"    src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-img-phone-desktop.jpg" />
					<img class="mobileONLY s4-img" src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-img-phone-mobile.jpg" />
				</div>
			</div>
		</div>
		<!--<a class="sec5-anchor" href="#news-and-events"><img class="section-down-arrow" src="<?php echo get_bloginfo('template_url'); ?>/images/homepage-icon-subbanner-pink-down-arrow-2x.png" alt/></a>-->
	</div>
	<!--<div class="section5-wrapper" style="background: transparent url('<?php echo get_bloginfo('template_url'); ?>/images/homepage-banner-newsandevents-2x.jpg') no-repeat center center; background-size: cover; min-height: 662px;">
		<a name="news-and-events"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-24 sec-newsEvents">
					<h2>Highlighted News&nbsp;<span style="color: #99cc33;">&amp;</span>&nbsp;Events</h2>
					<?php $temp = $wp_query;
						  $wp_query= null;
						  $wp_query = new WP_Query();
						  $wp_query->query('cat=6,7&order_by=date&order=ASC&showposts=2'); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		                <?php 
		               		$title = get_the_title();
		               		$permalink = get_permalink();
		               	?>
		               	<div class="post-sec">
				               	<div class="col-xs-2 col-date">
				                	<span class="date-month"><?php echo the_time('M');?></span><br/>
				                	<span class="date-day"><b><?php echo the_time('d');?></b></span>
				               	</div>
				            <a href="<?php $permalink; ?>">
				               	<div class="col-xs-7 col-img">
				               		<?php the_post_thumbnail(); ?>
				               	</div>		
				               	<div class="col-xs-15 col-content">
				               		<span class="title"><?php echo $title;?></span>
				               		<p class="excerpt">
						                
										<?php
											$postExcerpt = strip_tags(get_the_content());
											$permalink = get_permalink();
							                $pos= strlen($postExcerpt) > 175 ? strpos($postExcerpt, ' ', 175) : strlen($postExcerpt);
							                if(!$pos) $pos = strlen($postExcerpt);
											echo substr($postExcerpt,0,$pos);
										?><?php echo '...' ?>
									
									</p>		
				               	</div>	
			                </a>
		               	</div>	
		               	<div class="clear"></div>	            
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					<div class="col-xs-15 col-viewAll" style="padding: 0;">
						<a href="<?php echo get_permalink(28); ?>" class="viewAll">View All <b>Knōw</b>matters <br/>News&nbsp;&amp;&nbsp;Events</a>	
					</div>
				</div>
			</div>
		</div>
	</div>-->
</div>
<?php get_footer(); ?>