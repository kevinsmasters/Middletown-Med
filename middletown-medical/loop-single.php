<style>#recipe-sidenav { display: none; }</style>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class('box') ?>>
		<h2><?php the_title(); ?></h2>
		<div class="entry">        
        <p class="postdate"><?php the_time('F jS, Y') ?></p>
			<?php the_content(); ?>
			<div id="printThis">
			<?php if(function_exists('wp_print')) { print_link(); } ?></div>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			
			<p class="postmetadata alt">
				<small>
					This entry was posted
					on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
					and is filed under <?php the_category(', ') ?>.
					You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

					<?php if ( comments_open() && pings_open() ) { ?>
						You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
					<?php } elseif ( !comments_open() && pings_open() ) { ?>
						Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
					<?php } elseif ( comments_open() && !pings_open() ) { ?>
						You can skip to the end and leave a response. Pinging is currently not allowed.
					<?php } elseif ( !comments_open() && !pings_open() ) { ?>
						Both comments and pings are currently closed.
					<?php } ?>
				</small>
			</p><!-- /p.postmetadata -->
			
		</div><!-- /div.entry -->
	</div> <!-- /div.post -->
	
	<div class="navigation">
<?php
// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">Newer Entries &raquo;</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">&laquo; Older Entries</span>',
			) );
			?>
			

		</div>
	<?php comments_template(); ?>
<?php endwhile; ?>
<?php endif; ?>