<?php
global $query_string;
query_posts($query_string . '&cat=-26,-31,-33,-32,-28,-38,-36,-27'); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class('box') ?>>
		<?php if ( has_post_thumbnail() ) : ?>
	
	<?php the_post_thumbnail('blog-thumb'); ?>
	
<?php endif; ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php if ( $post->post_type == 'post' ): ?>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
			<?php endif ?>

			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			
			<?php if ( $post->post_type == 'post' ): ?>
				<p class="postmetadata">
					<?php the_tags(__('Tags: '), ', ', '<br />'); ?> 
					<?php _e('Posted in '); the_category(', '); ?> | 
					<?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
				</p>
			<?php endif ?>
		</div>

	<?php endwhile; ?>

	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>
		</div>
	<?php endif; ?>
	
<?php else : ?>
	<div id="post-0" class="post error404 not-found">
		<h2>Not Found</h2>
		
		<div class="entry">
			<?php  
				if ( is_category() ) { // If this is a category archive
					printf("<p>Sorry, but there aren't any posts in the %s category yet.</p>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<p>Sorry, but there aren't any posts with this date.</p>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<p>Sorry, but there aren't any posts by %s yet.</p>", $userdata->display_name);
				} else if ( is_search() ) {
					echo("<p>No posts found. Try a different search?</p>");
				} else {
					echo("<p>No posts found.</p>");
				}
			?>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>