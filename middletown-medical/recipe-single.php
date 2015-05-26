
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class('box') ?> id="recipecard-container">
    	<div class="<?php if (in_category('32')){ ?>      
      entree
      <?php $mycat = 32; ?>
      <?php } else if (in_category('33')){ ?> 
      dessert
      <?php $mycat = 33; ?>
       <?php } else if (in_category('31')){ ?> 
       appetizer
       <?php $mycat = 31; ?>
       <?php } else {
	   
	   } ?>" id="recipecard-header">
    <ul>
      <li class="category-title">
      <?php if (in_category('32')){ ?>      
      Entr&eacute;e
      <?php } else if (in_category('33')){ ?> 
      Dessert
       <?php } else if (in_category('31')){ ?> 
       Appetizer
       <?php } else {
	   
	   } ?>
      </li>
      <li class="entree-title"><?php the_title(); ?></li>
    </ul><div id="fancy_print"></div>
  </div><!-- recipecard-header -->    
    <?php
		if ( has_post_thumbnail() ) {
			echo ('<div class="recipe-photo">');
	the_post_thumbnail( 'recipe-photo', array( 'class' => 	'pinthis' ));
	echo ('</div>');
} ?>
<?php $pinurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div id="pininit">
<a href="//www.pinterest.com/pin/create/button/?url=<?php get_permalink(); ?>&media=<?php echo $pinurl; ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="none" data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
</div>
		<div class="entry" id="recipecard-content">        
        <ul>
      	<li class="ingredients">INGREDIENTS</li>
      	<li class="directions">DIRECTIONS</li>
    	</ul>
			<?php the_content(); ?>
			<p class="disclaimer">recipe photo may differ slightly from actual recipe</p>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
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
		</div><!-- /div.entry -->
        <div id="recipecard-nav">
    <ul>
      <li>&laquo; <?php previous_post_link('%link', 'PREVIOUS RECIPE', TRUE, $mycat); ?></li>
      <li class="recipe-right"><?php next_post_link('%link', 'NEXT RECIPE', TRUE, $mycat); ?> &raquo;</li>
    </ul>
  </div>
  <div class="recipe-clear"></div>
	</div> <!-- /div.post -->
	<div class="shareRecipe">
    <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<?php echo do_shortcode('[facebook type="button"]'); ?>
</div>
	<?php comments_template(); ?>
<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">

jQuery("#fancy_print").click(function(){
				printIt(document.getElementById('recipecard-container').innerHTML);
				//alert('1');
			 });

var win=null;
function printIt(printThis)
{
	win = window.open();
	self.focus();
	win.document.open();
	win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
	win.document.write('body, td { font-family: Verdana; font-size: 10pt;} #recipecard-content li { float: left; padding: 0 0 0 14px; list-style-type: none; } .entree-title { list-style-type: none; } .ingredients-text { clear: left; margin: 0; padding: 0; width: 204px; float:left; border-right: thin dotted #CCCCCC; } .directions-text {    float: left;    margin: 0;    padding: 0 0 0 20px;    width: 410px;} .disclaimer { clear: both; } .iconCats, .category-title, #recipecard-nav { display: none; } #recipecard-content li.directions { margin-left: 200px; }<'+'/'+'style'+'>');	
	win.document.write('<'+'/'+'head'+'><'+'body'+'>');
	win.document.write(printThis);
	win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
	win.document.close();
	win.print();
	win.close();
}
</script>
