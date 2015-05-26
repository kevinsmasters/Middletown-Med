<?php get_header();
	mm_before_content() ?>
    
    <div id="recipecard-container">
  <div class="main-category-appetizer" id="recipecard-header">
    <ul>
      <li class="main-category-title-appetizer">Appetizers</li>
    </ul>
  </div>
  <!--end recipecard-header-->
  
  <div id="categorycard-content">
    <ul class="appetizer-list"><?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <li>
		
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="recipe-thumb">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php the_post_thumbnail( 'recipe-thumb' ); ?>
            
            <?php
								$shortTitle = the_title();
								if (strlen($shortTitle) > 15) {
								$shortTitle = substr($shortTitle,0,strpos($shortTitle,' ',15));
								$shortTitle = $shortTitle .'...';
								}
							 echo $shortTitle; ?>
            
            </a>
            </div>
			<?php else : ?>
            <div class="recipe-nothumb">
             <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
             <?php
								$shortTitle = the_title();
								if (strlen($shortTitle) > 15) {
								$shortTitle = substr($shortTitle,0,strpos($shortTitle,' ',15));
								$shortTitle = $shortTitle .'...';
								}
							 echo $shortTitle; ?>
            
            </a>
            </div>
            <?php endif; ?>
            <ul class="iconCats">
			<?php
$taxonomy = 'category';

// get the term IDs assigned to post.
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
// separator between links
$separator = ', ';

if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

	$term_ids = implode( ',' , $post_terms );
	$terms = wp_list_categories( 'title_li=&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
	$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

	// display post categories
	echo  $terms;
}
?>
			
	</ul>		
	</li>	
	<?php endwhile; ?>	
<?php else : ?>
	<div id="post-0" class="post error404 not-found">
		Not Found<br /><br />
		
		<div class="entry">
			<?php  
				if ( is_category() ) { // If this is a category archive
					printf("Sorry, but there aren't any posts in the %s category yet.", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("Sorry, but there aren't any posts with this date.");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("Sorry, but there aren't any posts by %s yet.", $userdata->display_name);
				} else if ( is_search() ) {
					echo("No posts found. Try a different search?");
				} else {
					echo("<br /><br />No posts found.");
				}
			?>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?></ul>
  </div>
  <!--end categorycard-content-->
  
  <div id="recipecard-nav">
    <ul>
      <li>&laquo; <a href="/recipes/entrees/">ENTR&Eacute;ES</a></li>
      <li class="recipe-right"><a href="/recipes/desserts/">DESSERTS</a> &raquo;</li>
    </ul>
  </div>
  <!--end recipecard-nav-->
  
  <div class="recipe-clear"></div>
</div>
    
	
<?php get_footer(); ?>