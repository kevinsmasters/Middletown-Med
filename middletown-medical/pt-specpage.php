<?php 
/*
	Template Name: Physical Therapy Service Page
*/
get_header(); ?>

	<?php 
	if ( has_post_thumbnail( $post->ID ) ) :	?>
	<div id="content">
		<h2 class="content-head"
		<?php if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;} 
			if(strlen(trim($title)) < 1) 
			echo 'style="display:none;"'; ?>
      <?php endif; ?>>
				<span><?php 
		$title = get_the_title( $post->ID );
		if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;
			echo $title;
		} ?></span></h2>
		
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
		<div class="image-holder">
			<?php echo get_the_post_thumbnail( $post->ID, 'f-image' ) ?>
			<div class="options">
		<?php //wp_nav_menu( array(	'menu'            => $strip_menu, 	'container'       => false, )); ?>
		<?php //wp_nav_menu( array(	'menu'            => $strip_menu, 	'container'       => false, )); ?>
	</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<div id="main">
	<?php if ( $strip_menu = carbon_get_post_meta( $post->ID, '_select_strip_menu') ) : ?>
	
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
	<?php /*	<div class="rightFeeds">
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
	}
?>
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
                
            </div> */ ?>
	<?php endif; ?><a name="specList"></a>
    <div class="box" id="specialList">    
					<?php

//$spec = pods_url_variable('last');

//echo ($spec);


/*$shortSpec = urldecode($spec);
echo ('<h1>');
echo ($shortSpec);
echo ('</h1>');
echo ('<br />');*/
//$shortSpec = substr($shortSpec,0,strpos($shortSpec,' ',0));
//echo ($shortSpec);
 
 // Define the params to find the Pods Item based on the $id
//$params = array( 'orderby' => 'post_title DESC', 'limit' => 15, 'where' => 'permalink = "'.$id.'"' );
//$params = array( 'where' => 'field_of_practice.meta_value LIKE "Cardiology"' );
global $wp_query;
$postid = $wp_query->post->ID;
//echo get_post_meta($postid, 'specialty', true);
$shortSpec = get_post_meta($postid, 'specialty', true);
wp_reset_query();
//echo ($shortSpec);
$params = array (
						'where' => "( field_of_practice.meta_value = 'Physical Therapy')"
    );
 
// Display it by using Pods Template
//echo pods( 'staff' )->find( $params )->template( 'staff_list' );
$pod_staff = pods( 'staff', $params );
echo $pod_staff->find( $params )->template( 'staff_list' );
$specPods = pods('staff'); 
$params = array (
			'limit' => 10,
			'where' => "( field_of_practice.meta_value = 'Physical Therapy')"
    );
$specPods->find($params);

echo $specPods->pagination(array(
    //'type' => 'list',
    'class' => 'pods-pagination-advanced' // Bootstrap will respond to this class
));
 
?>

 <?php global $wp_query;
$postid = $wp_query->post->ID;
//echo get_post_meta($postid, 'specialty', true);
echo get_post_meta($postid, 'staff', true);
wp_reset_query(); ?> <script>
				jQuery(document).ready(function() {
						
												
							
							jQuery('.staffForms a').each(function () {
								var docName = jQuery(this).parent().siblings('h2').html();
								docName = jQuery(docName).text();
								
								locName = jQuery(this).parent().siblings('.staffLoc').children('a').eq(0).html();
								
								locName = jQuery(locName).text();
															
								var _href = jQuery(this).attr("href"); 
								jQuery(this).attr("href", _href + '?doc=' + docName + '&loc=' + locName);
							
							});
							
							
						/*
  							 var _href = jQuery(this).attr("href"); 
   						jQuery(this).attr("href", _href + formquery + '&loc=' + formloc);
						*/
						
					});
				</script>
				</div>	
  
<?php get_footer(); ?>