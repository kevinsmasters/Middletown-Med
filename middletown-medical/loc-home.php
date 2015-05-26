<?php

/*

	Template Name:  Locations Home Page

*/

 get_header(); ?>

	<?php 

	if ( has_post_thumbnail( $post->ID ) ) :	?>

	<div id="content" class="locations_home_header">

		<?php 

		$title = get_the_title( $post->ID );

		$custom = carbon_get_post_meta( $post->ID, '_page_title');

		$title = $custom;

		if(strlen(trim($title)) < 1) {}

		else {

			echo '<h2 class="content-head"><span>' . $title . '</span></h2>';}

      ?><?php endif; ?>

		

		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>

		<div class="image-holder">

			<?php the_post_thumbnail( 'full' ) ?>

            <div class="options">

		<?php /* wp_nav_menu( array(

			'menu'            => $strip_menu, 

			'container'       => false, 

		)); */ ?>

	</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<div id="loc_home_requestButton">
<a href="/request-an-appointment/">Request An Appointment</a>
</div>
<div id="main" class="full-width">
<?php //if ( $strip_menu = carbon_get_post_meta( $post->ID, '_select_strip_menu') ) : ?>
<?php 

	//endif; 
	//get_sidebar();

	echo '<div class="right-side">';
	if ( carbon_get_post_meta( $post->ID, '_hide_page_title') == false ) {
		echo '<h2 class="pagetitle"><span>'. get_the_title( $post->ID ) .'</span></h2>';
}

	if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    
		<?php the_content(); ?>
        
	<?php endwhile; ?>
	<?php endif; ?>
    <?php rewind_posts(); ?>

<?php /*?>    <div class="rightFeeds">

            	<h3>Recent News</h3>
              <?php $ptag = get_post_meta($post->ID, 'tagged with', true); ?>
			  <?php $ttag = get_post_meta($post->ID, 'testimonial', true); ?>        
<?php
    $recentPosts = new WP_Query();
	if (!empty($ptag)) {
    	$recentPosts->query('cat=(39,34,67)&posts_per_page=3&tag='.$ptag);
		//echo ($ptag);
	} else {
	$recentPosts->query('cat=(39,34,67)&posts_per_page=3');	
	} ?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

<h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
<?php endwhile; ?>
              <br />
              <br />
                <?php

    $recentFB = new WP_Query();
	if (!empty($ttag)) {
	$recentFB->query('category_name=testimonial&orderby=rand&showposts=1&tag='.$ttag);
	//echo ($ttag);
	} else {
    $recentFB->query('category_name=testimonial&orderby=rand&showposts=1');
	//echo ('no');
	}
?>

<?php if ($recentFB->have_posts()) {
	echo ('<h3>Patient Feedback</h3>');
}?>
<?php while ($recentFB->have_posts()) : $recentFB->the_post(); ?>
    <?php the_content() ?>

<?php endwhile; ?>
</div><?php */?>

<?php get_footer(); ?>