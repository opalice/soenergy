<?php get_header(); ?>

<?php if( function_exists('nicdark_archive_content')){ do_action( "nicdark_archive_nd" ); }else{ ?>

<!--start section-->
<div id="nicdark_header_img_archive" class="nicdark_section nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    	<div class="nicdark_grid_12 nicdark_text_align_center">

    		<div class="nicdark_section nicdark_height_80"></div>

    		<?php if (is_category()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Category','beautypack'); ?></strong></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_letter_spacing_3 nicdark_font_weight_lighter"><?php single_cat_title(); ?></h4>
			<?php elseif (is_tag()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Tag','beautypack'); ?></strong></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_letter_spacing_3 nicdark_font_weight_lighter"><?php single_tag_title() ?></h4>
			<?php elseif (is_month()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Archive for','beautypack'); ?></strong></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_letter_spacing_3 nicdark_font_weight_lighter"><?php single_month_title(' '); ?></h4>
			<?php elseif (is_author()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Author','beautypack'); ?></strong></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_letter_spacing_3 nicdark_font_weight_lighter"><?php the_author(); ?></h4>
			<?php elseif (is_search()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Search for','beautypack'); ?></strong></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_letter_spacing_3 nicdark_font_weight_lighter">" <?php the_search_query(); ?> "</h4>
			<?php else: ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><strong><?php esc_html_e('Archive','beautypack'); ?></strong></h1>
			<?php endif ?>

    		<div class="nicdark_section nicdark_height_80"></div>

    	</div>

    </div>
    <!--end container-->

</div>
<!--end section-->


<div class="nicdark_section nicdark_height_50"></div>


<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    	
    	<!--start all posts previews-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		<div class="nicdark_grid_8"> 
    	<?php }else{ ?>

    		<div class="nicdark_grid_12">
    	<?php } ?>
	

    		<?php if(have_posts()) : ?>
				
				<?php while(have_posts()) : the_post(); ?>
					
					

					<!--#post-->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!--START PREVIEW-->
						<?php if (has_post_thumbnail()): ?>
							<div class="nicdark_section nicdark_image_archive">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif ?>

						<div class="nicdark_section ">

							<div class="nicdark_section nicdark_float_left nicdark_padding_30 nicdark_border_1_solid_grey nicdark_box_sizing_border_box">
								
								<div class="nicdark_section nicdark_box_sizing_border_box">
									<p class="nicdark_color_grey nicdark_font_size_12 nicdark_text_transform_uppercase nicdark_letter_spacing_3 nicdark_second_font nicdark_font_weight_lighter"><?php esc_html_e('Date','beautypack'); ?> : <?php the_time('j') ?> <?php the_time('M') ?> <span class="nicdark_margin_left_20"><?php esc_html_e('Author','beautypack'); ?> : </span><?php the_author_posts_link(); ?><span class="nicdark_margin_left_20"><?php esc_html_e('Comments','beautypack'); ?> : </spam> <?php comments_number(esc_html__('No Comments','beautypack'),esc_html__('One Comment','beautypack'),esc_html__( '% Comments','beautypack') );?></p>	
								</div>
								<div class="nicdark_section nicdark_height_10"></div>
								<h2>
									<a class="nicdark_color_greydark nicdark_first_font" href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										<?php if ( has_post_format( 'video' )) { esc_html_e(' - Video','beautypack'); } ?>
									</a>
								</h2>
								<div class="nicdark_section nicdark_height_20"></div>
								<?php the_excerpt(); ?>
								<div class="nicdark_section nicdark_height_20"></div>
								<a class="nicdark_bg_btn_archive nicdark_display_inline_block nicdark_line_height_16 nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_25 nicdark_bg_orange " href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','beautypack'); ?></a>

							</div>
						</div>
						<!--END PREVIEW-->

					</div>
					<!--#post-->

					<div class="nicdark_section nicdark_height_50"></div>


						
				<?php endwhile; ?>
			<?php endif; ?>



			<!--START pagination-->
			<div class="nicdark_section">

				<?php

		    	the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Prev', 'beautypack' ),
					'next_text'          => esc_html__( 'Next', 'beautypack' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'beautypack' ) . ' </span>',
				) );

				?>

				<div class="nicdark_section nicdark_height_50"></div>
			</div>
			<!--END pagination-->


    	</div>
    	<!--end all posts previews-->

 
    	
    	<!--sidebar-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		
	    	<div class="nicdark_grid_4">
	    		<?php if ( ! get_sidebar( 'nicdark_sidebar' ) ) : ?><?php endif ?>
	    		<div class="nicdark_section nicdark_height_50"></div>
	    	</div>
	    	
    	<?php } ?>
    	<!--end sidebar-->

    	
	</div>
	<!--end container-->

</div>
<!--end section-->

<?php } ?>

<?php get_footer(); ?>