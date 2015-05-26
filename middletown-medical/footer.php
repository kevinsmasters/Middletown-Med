</div>
<div id="requestButton"> <a href="/request-an-appointment/">Request An Appointment</a> </div>
</div>
<?php if ( is_page_template( 'page-home.php' ) ) { ?>
<div class="shell">
  <div id="footer"> <!--center>  <p><strong><font color="red">IMPORTANT</font> - Our offices will be  opening at 10am today.</strong></p></center-->
    <?php 					$images = carbon_get_theme_option( 'homepage_links', 'complex');					if ( !empty( $images ) ) :					?>
    
    <div class="link-lists">
      <ul>
        <?php foreach ( $images as $i ) {									echo '<li>';									if ( $i['image_link'] ) echo '<a href="'. esc_attr( $i['image_link'] ) .'">';									echo '<img src="'. $i['image'] .'" alt="" />';									if ( $i['image_link'] ) echo '</a>';									echo '</li>'; 								} ?>
      </ul>
    </div>
    <?php endif;					$logos = carbon_get_theme_option('footer_logos', 'complex');					if ( !empty( $logos ) ) :					?>
    <div class="logos">
      <ul>
        <?php foreach ( $logos as $l ) {								echo '<li>';								if ( $l['logo_link'] ) echo '<a href="'. esc_attr( $l['logo_link'] ) .'">';								echo '<img src="'. $l['logo'] .'" alt="" />';								if ( $l['logo_link'] ) echo '</a>';								echo '</li>'; 							} ?>
      </ul>
    </div>
    <?php endif; ?>
    <!--div id="blogFooter">
      <h3>Latest From Our Blog</h3>
      <ul>
        <?php    		$recentPosts = new WP_Query();    $recentPosts->query('cat=-26,-31,-33,-32,-27,-36,-38,-28,-37,-35,-40,-68&showposts=3');?>
        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <li>
          <h4><a href="<?php the_permalink() ?>" rel="bookmark">
            <?php the_title(); ?>
            </a></h4>
          <p class="smallDate">
            <?php the_time('F jS, Y') ?>
          </p>
          <?php the_excerpt() ?>
        </li>
        <?php endwhile; ?>
      </ul>
      <p class="blogMore"><a href="/blog/">Visit the Blog &gt;</a></p>
    </div>
    <div id="recipeFooter">
      <h3>New Recipes</h3>
      <ul>
        <?php    $recentRecipes = new WP_Query();    $recentRecipes->query('cat=26&showposts=8');?>
        <?php while ($recentRecipes->have_posts()) : $recentRecipes->the_post(); ?>
        <li>
          <?php if (has_post_thumbnail()) : ?>
          <div class="recipe-thumb"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php the_post_thumbnail( 'home-recipe' ); ?>
            <?php								$shortTitle = the_title();								if (strlen($shortTitle) > 15) {								$shortTitle = substr($shortTitle,0,strpos($shortTitle,' ',15));								$shortTitle = $shortTitle .'...';								}							 echo $shortTitle; ?>
            </a> </div>
          <?php else : ?>
          <div class="recipe-nothumb"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php								$shortTitle = the_title();								if (strlen($shortTitle) > 15) {								$shortTitle = substr($shortTitle,0,strpos($shortTitle,' ',15));								$shortTitle = $shortTitle .'...';								}							 echo $shortTitle; ?>
            </a> </div>
          <?php endif; ?>
        </li>
        <?php endwhile; ?>
      </ul>
      <p class="blogMore"><a href="/recipes/">See All Recipes &gt;</a></p>
    </div-->
  </div>
</div>
<?php 			} else {							echo '</div>';			} ?>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script> 
<script type="text/javascript">
var obl = (function(){
  var a = document.getElementsByTagName('a');
  for (var idx= 0; idx < a.length; ++idx){
    var url     = a[idx].href;
    var matches = url.match(/^https?\:\/\/(?!(?:www\.)?(?:middletownmedical\.com|midm\.co))([^\/:?#]+)(?:[\/:?#]|$)/i);
    var domain  = matches && matches[1];
      if(domain !== null){   
         a[idx].addEventListener("click", function(e){
              var ob = this.href;
              ga('send', 'event', 'outbound', 'click', ob, {'hitCallback':
                 function () {
                 document.location = ob;
                 }
              });      
         }, false);  
      }
  }
})();
</script> 
<!-- Place this tag in your head or just before your close body tag. --> 
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body></html>