<?php get_header(); ?>
	<?php 
	if ( has_post_thumbnail( $post->ID ) ) :	?>
	<div id="content">
		<?php 
		$title = get_the_title( $post->ID );
		if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;
		} ?>
		<h2 class="content-head"><?php echo $title ?></h2>
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
		<div class="image-holder">
			<?php echo get_the_post_thumbnail( $post->ID, 'f-image' ) ?>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</div>

<div id="main">
	<?php if ( $strip_menu = carbon_get_post_meta( $post->ID, '_select_strip_menu') ) : ?>
	<div class="options">
		<?php wp_nav_menu( array(
			'menu'            => $strip_menu, 
			'container'       => false, 
		)); ?>
	</div>
	<?php endif; 

	get_sidebar();

	echo '<div class="right-side">';
	if ( carbon_get_post_meta( $post->ID, '_hide_page_title') == false ) {
		echo '<h2 class="pagetitle">'. get_the_title( $post->ID ) .'</h2>';
	}
	if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				<div class="box">
					<?php the_content(); ?>
				</div>	
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>