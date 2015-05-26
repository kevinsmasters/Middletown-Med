		
        <div <?php post_class('box') ?>>

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



	



	

