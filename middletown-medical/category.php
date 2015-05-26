<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php $catid = $wp_query->query_vars['cat']; $cat_family = array_reverse(explode(',',get_category_parents($catid,false,','))); ?>
<?php 
$cur_cat_id = get_cat_id( single_cat_title("",false) );
if ($cat_family[2] == 'Blog') {
$catbread = '<span><a href="/blog/">Blog</a> </span> <span> &raquo; </span> <span> <a>' . $cat_family[1] . '</a> </span> <span> &raquo;</span>';
} else {
$catbread = '';
}
if ($cur_cat_id != 26 or $cat_family[2] == 'Blog') { ?>

<link rel="stylesheet" href="http://dev9.nextstepdigital.com/wp-content/themes/middletown-medical/blogstyle.css" type="text/css" media="screen" />

<div id="bloghead">
<img src="/wp-content/themes/middletown-medical/images/blog-photo.jpg" alt="Middletown Medical Blog">
<div id="blogbread">
<span><a href="/" class="homeBC">Home</a> </span><span> &raquo;</span><?php echo ($catbread); ?>
</div>
</div>

	<div id="main">
	<div class="aside">
	<?php dynamic_sidebar('blog-widgets'); ?>
	</div><!-- aside -->
	<div class="right-side">

<?php 


} else {

?>
<?php

	mm_before_content();

}	
		?>

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h2 class="archive-title"><?php printf( __( '%s', 'twentytwelve' ), single_cat_title( '', false )); ?></h2>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				 
				 if ($cur_cat_id != 26 or $cat_family[2] == 'Blog') { 
			get_template_part( 'loop-arch3', 'archive' );
			} else {
			
				get_template_part( 'loop-arch2', 'archive' );
			}

			endwhile;

			/*twentytwelve_content_nav( 'nav-below' );*/
			?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>

		<div class="navigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>

			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>

		</div>

	<?php endif; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>