<?php 
/*
	Template Name:  Ortho Services Page
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
				<?php 
		$title = get_the_title( $post->ID );
		if ( $custom = carbon_get_post_meta( $post->ID, '_page_title') ) {
			$title = $custom;
			echo $title;
		} ?></h2>
		
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
		<div class="image-holder">
			<?php echo get_the_post_thumbnail( $post->ID, 'f-image' ) ?>
		</div>
		<?php endif; ?>
	</div>
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
     <div class="right-right-side">
    <ul>
    <?php if ( ! dynamic_sidebar( 'ortho-sidebar' ) ) : ?>
	
	<?php endif; ?>
    </ul>
    </div><!-- /right-side -->
    <a name="specList"></a>
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
			
			'where' => array(	
			"t.post_status = 'publish'",		
    		'relation' => 'AND',
    			array(
             'key' => 'field_of_practice.meta_value',
                  //'value' => 'Family',
                     value => $shortSpec,
             'compare' => 'LIKE' // << added this so it searches contents, not exact match
              )
          
		)
    );
 
// Display it by using Pods Template
//echo pods( 'staff' )->find( $params )->template( 'staff_list' );
$pod_staff = pods( 'staff', $params );
echo $pod_staff->find( $params )->template( 'staff_list' );
$specPods = pods('staff'); 
$params =  array (
			  'limit' => 10,
			  'where' => array(
    		'relation' => 'AND',
    			array(
             'key' => 'field_of_practice.meta_value',
                  //'value' => 'Family',
                      value => $shortSpec,
             'compare' => 'LIKE' // << added this so it searches contents, not exact match
              )
		)
    );
$specPods->find($params);

echo $specPods->pagination(array(
    //'type' => 'list',
    'class' => 'pods-pagination-advanced' // Bootstrap will respond to this class
));
 
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
    
<?php get_footer(); ?>