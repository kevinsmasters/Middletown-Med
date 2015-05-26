<?php 
/*
	Template Name:  New Location Page
*/
get_header(); ?>
<div id="main" class="main_locpage">
<?php 
	if ( has_post_thumbnail( $post->ID ) ) :	?>
	<div id="content">
		<h2 class="content-head"
		<?php if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;} 
			if(strlen(trim($title)) < 1) 
			echo 'style="display:none;"'; ?>
      <?php endif; ?>><span>
				<?php 
		$title = get_the_title( $post->ID );
		if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;
			echo $title;
		} ?></span></h2>
		
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
		<div class="image-holder">
			<?php echo get_the_post_thumbnail( $post->ID, 'f-image' ) ?>
			<?php if ( $strip_menu = carbon_get_post_meta( $post->ID, '_select_strip_menu') ) : ?>
			<div class="image_menu">
				<?php wp_nav_menu( array(
					'menu'            => $strip_menu, 
					'container'       => false, 
				)); ?>
			</div>
		<?php endif; ?>
		</div>
		<?php endif; ?>
		
</div><!--content-->
	
	<?php echo '<div class="right-side">';
	if ( carbon_get_post_meta( $post->ID, '_hide_page_title') == false ) {
		echo '<h2 class="pagetitle"><span>'. get_the_title( $post->ID ) .'</span></h2>';
	}
	if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				<div class="box">
					<?php the_content(); ?>
				</div>
				<?php if ( is_page() ) : if ( $menu_slug = carbon_get_post_meta( $post->ID, '_select_menu') ) : ?>
				
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
    
    <?php endif; ?>
    
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
$shortLoc = get_post_meta($postid, 'location', true);
wp_reset_query();
//echo ($shortLoc);
$params = array (
			  'limit' => 10,
			  'where' => array(
			  "t.post_status = 'publish'",
    		'relation' => 'AND',
    			array(
             'key' => 'locations.meta_value',
                  //'value' => 'Middletown',
                      value => $shortLoc,
             'compare' => 'LIKE' // << added this so it searches contents, not exact match
              )	
		)
    );
 
// Display it by using Pods Template
echo pods( 'staff' )->find( $params )->template( 'staff_list' );
$locPods = pods('staff'); 
$params = array (
			  'limit' => 10,
			  'where' => array(
    		'relation' => 'AND',
    			array(
             'key' => 'locations.meta_value',
                  //'value' => 'Middletown',
                      value => $shortLoc,
             'compare' => 'LIKE' // << added this so it searches contents, not exact match
              )	
		)
    );
$locPods->find($params);

echo $locPods->getPagination(); 
?>
<script>
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
                </div>
<?php get_footer(); ?>