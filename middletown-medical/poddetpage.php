<?php
/*
	Template Name:  Pod Detail Page */
 get_header(); ?>
	<div id="sidebar" class="inner">
	<div class="side-navigation">
						
	<?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
	</div>
</div><!-- sidebar -->
	<div id="content">
    
		<h2 class="content-head"><span>OUR STAFF A TO Z</span></h2>
		
		<div class="image-holder" style="height: 323px;">
			<img width="680" height="238" alt="stethoscope-with-apple" src="/wp-content/uploads/2013/05/stethoscope-with-apple-680x238.jpg" style="height: 323px;">	<div class="options">
		<?php //wp_nav_menu( array( 'theme_location' => 'staff-a-z-menu' ) ); ?>	</div>	</div>
	</div>
</div>

<div id="main">
	
	
	
	<div class="right-side full">
	
		<div class="box">
					<?php pods_content(); ?>
                   <div class="rightFeeds">
             <?php /*	<h3>Recent News</h3>
              
              
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
                              
               */ ?>
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
                
            </div> 
				</div>
                </div>	
                <script>				
	var formquery = '?doc=' + jQuery('.staffTitle').html();
	var formloc = jQuery('.staffLocation a').html();
	formloc = jQuery(formloc).text();
	//alert (formloc);
	
					jQuery(document).ready(function() {
						//jQuery('.staffForms a').append(formquery);
						//alert (formquery);
						jQuery('.staffForms a').each(function() {
							
						
  							 var _href = jQuery(this).attr("href"); 
							 if (! jQuery(this).hasClass('noqstr')) {
   						jQuery(this).attr("href", _href + formquery + '&loc=' + formloc);
						}
						
						});
					});
				</script>
<?php get_footer(); ?>