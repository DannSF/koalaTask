<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Clothing Store
 * @since 1.0
 */
?>

<?php $clothing_store_post_option = get_theme_mod( 'clothing_store_grid_column','3_column');
    if($clothing_store_post_option == '1_column'){ ?>
    <div class="col-lg-12 col-md-12">
<?php }else if($clothing_store_post_option == '2_column'){ ?>
    <div class="col-lg-6 col-md-6">
<?php }else if($clothing_store_post_option == '3_column'){ ?>
    <div class="col-lg-4 col-md-4">
<?php }else if($clothing_store_post_option == '4_column'){ ?>
    <div class="col-lg-3 col-md-3">
<?php }?>
	<div id="Category-section" class="entry-content w-100">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="postbox smallpostimage p-3">
				<?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('title', 'image', 'meta','btn'));
				foreach ($blog_archive_ordering as $post_data_order) :
					if ('title' === $post_data_order) :?>
					    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<?php elseif ('image' === $post_data_order) :?>
				        <?php
						// Get the post content
						$post_content = apply_filters('the_content', get_the_content());

						// Create a DOMDocument to parse the HTML content
						$dom = new DOMDocument();
						@$dom->loadHTML($post_content);

						// Find and display the first image in the post content
						$images = $dom->getElementsByTagName('img');

						if ($images->length > 0) {
						    $first_image = $images->item(0);
						    $image_url = $first_image->getAttribute('src');
						    
						    if (!empty($image_url)) {
						        echo '<img src="' . esc_url($image_url) . '">';
						    }
						}
					?>	
					<?php elseif ('meta' === $post_data_order) :?>
					    <div class="date-box mb-2 text-center">
							<?php if( get_option('clothing_store_date',false) != 'off'){ ?>
								<span class="mr-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_date_icon','far fa-calendar-alt')); ?> mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
							<?php } ?>
							<?php if( get_option('clothing_store_admin',false) != 'off'){ ?>
								<span class="entry-author mr-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_author_icon','fas fa-user')); ?> mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<?php }?>
							<?php if( get_option('clothing_store_comment',false) != 'off'){ ?>
								<span class="entry-comments mr-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_comment_icon','fas fa-comments')); ?> mr-2"></i> <?php comments_number( __('0 Comments','clothing-store'), __('0 Comments','clothing-store'), __('% Comments','clothing-store')); ?></span>
							<?php }?>
							<?php if( get_option('clothing_store_tag',false) != 'off'){ ?>
								<span class="tags"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_tag_icon','fas fa-tags')); ?> mr-2"></i> <?php display_post_tag_count(); ?></span>
							<?php }?>
						</div>
					<?php elseif ('btn' === $post_data_order) :?>
					    <div class="link-more mb-2 text-center">
							<a class="more-link" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('clothing_store_read_more_text',__('Read More','clothing-store'))); ?><i class="<?php echo esc_attr(get_theme_mod('clothing_store_read_more_icon','fas fa-arrow-right')); ?> ml-2"></i></a>
				  		</div>
					<?php endif;
				endforeach;
				?>       
			  	<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>