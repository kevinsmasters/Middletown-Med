<?php get_header(); 

if ( in_category( 'Recipes' ) || post_is_in_descendant_category( 26 ) ) {
	mm_before_content();
	
	
	} else { ?>
<link rel="stylesheet" href="http://dev9.nextstepdigital.com/wp-content/themes/middletown-medical/blogstyle.css" type="text/css" media="screen" />

<div id="bloghead">
<img src="/wp-content/themes/middletown-medical/images/blog-photo.jpg" alt="Middletown Medical Blog">
<div id="blogbread">
<span><a href="/" class="homeBC">Home</a> </span><span> &raquo; </span> <span><?php the_category( ' &raquo; ', $parents, $post_id ); ?> </span><span>&raquo;</span>
</div>
</div>

	<div id="main">
	<div class="aside">
	<?php dynamic_sidebar('blog-widgets'); ?>
	</div><!-- aside -->
	<div class="right-side">
<?php	
	}
	?>
    
    <?php if ( in_category( 'Recipes' ) || post_is_in_descendant_category( 26 ) ) {
	include 'recipe-single.php';
	} else {
	get_template_part( 'loop', 'single' );
}

?>
    
	<?php //get_template_part( 'loop', 'single' ) ?>
<?php get_footer(); ?>