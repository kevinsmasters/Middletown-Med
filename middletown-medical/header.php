<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="apple-itunes-app" content="app-id=804710212">
<title>
<?php wp_title(' '); ?>
<?php if(wp_title(' ', false)) { echo ' | '; } ?>
<?php bloginfo('name'); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="/css/reveal.css" />
<script type="text/javascript" src="/js/jquery.reveal.js"></script>
<script src="http://1to1hq.com/mmtwitter/jquery.tweet.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery('#tweet').tweet({
count: 1,
loading_text: 'loading twitter feed...',
modpath: "http://1to1hq.com/mmtwitter/",
username: 'MiddltwnMedical'
});
});
</script>
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='pt-sans-css' href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' type='text/css' media='all'>
<link rel='stylesheet' id='playball' href='//fonts.googleapis.com/css?family=Playball' type='text/css' media='all'>

<!-- Google Analytics Starts -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31018356-2']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
var a = document.getElementsByTagName('a');
for(i = 0; i < a.length; i++){
  if (a[i].href.indexOf(location.host) == -1 && a[i].href.match(/^http:\/\//i)){
   a[i].onclick = function(){
        _gaq.push(['_trackEvent', 'outgoing_links', this.href.replace(/^http:\/\//i, '')]);
        }
  }
}
</script>

<!-- Google Analytics Ends -->

</head>

<body <?php body_class();?>>
<div class="bg2">
<div class="shell">
  <div id="header">
    <h1 id="logo"><a href="<?php echo home_url( '/' ) ?>">
      <?php bloginfo( 'name' ) ?>
      </a><span>Serving Orange, Sullivan and Ulster counties, NY</span></h1>
    <div class="right">
      <?php wp_nav_menu( array(
						'theme_location'  => 'top-menu',
						'container'       => false, 
						'menu_class'      => 'buttons', 
					)); ?>
      <div class="cl">&nbsp;</div>
      <div class="header-bottom">
        <div class="form">
          <?php get_search_form(); ?>
        </div>
        <?php /*if ( $phone = carbon_get_theme_option( 'header_phone' ) ) : ?>

        <p class="phone">Call <?php echo $phone ?></p>

        <?php endif; */?>
        <div class="iWasPhone"><a href="#" class="phoneShow">View our phone numbers <span>&gt;</span></a>
          <div class="phoneHid"> <span><strong>Bloomingburg</strong> (845) 733-4515<br />
            <strong>Catskill Adult &amp; Pediatric Medicine</strong> (845) 791-6400<br />
            <strong>Chester</strong> (845) 469-2692<br />
            <strong>Ellenville</strong> (845) 647-6700<br />
            <strong>George Giovannone Physical Therapy</strong> (845) 344-1899<br />
            <strong>Liberty Medical Group</strong> (845) 292-6630</span> <span><strong>Middletown</strong> (845) 342-4774<br />
            <strong>Port Jervis</strong> (845) 697-3271<br />
            <strong>Sullivan Internal Medicine Group</strong> (845) 794-1600<br />
            <strong>Warwick</strong> (845) 986-7474<br />
            <strong>Wurtsboro</strong> (845) 888-2200</span>
            <div style="clear: both; height: 1px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="social">
      <div id="socialTl">
        &nbsp;<p>Connect With Us</p>
        <p><a href="https://twitter.com/MiddltwnMedical" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @MiddltwnMedical</a> 
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p '://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
        <p></p>
      </div>
<a href="//plus.google.com/115384304782860673503?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;"><img src="/wp-content/themes/middletown-medical/images/2015/gplus.png" alt="Google " style="border:0;width:40px;height:40px;"/></a><a href="https://www.facebook.com/MiddletownMedical" target="_blank"><img src="/wp-content/themes/middletown-medical/images/2015/facebook.png"/ alt="Facebook"></a><a href="http://midm.co/youtubeiconwebsite" target="_blank"><img src="/wp-content/themes/middletown-medical/images/2015/youtube.png"/ alt="YouTube"></a><a href="http://www.pinterest.com/middltwnmedical/" target="_blank"><img src="/wp-content/themes/middletown-medical/images/2015/pinterest.png" alt="Pinterest" /></a><a href="https://twitter.com/MiddltwnMedical" target="_blank"><img src="/wp-content/themes/middletown-medical/images/2015/twitter.png" alt="Twitter" /></a><a href="/blog/"><img src="/wp-content/themes/middletown-medical/images/blog.png" alt="Blog" /></a><a href="https://itunes.apple.com/us/app/middletown-medical/id804710212?mt=8"><img src="http://www.middletownmedical.com/wp-content/uploads/2014/03/app-download.png" style="height:40px; width:179px;"/></a><span style="display:none;" class="ga-tracking" data-method="_trackEvent" data-category="" data-action="" data-label="" data-value="" data-noninteraction=""></span></div>
  </div>
</div>
<div id="navigation">
  <div class="shell">
    <?php wp_nav_menu( array(
					'theme_location'  => 'main-menu',
					'container'       => false, 
					)); ?>
  </div>
</div>
<?php if ( is_page_template( 'page-home.php' ) ) : ?>
<div style="width:964px; margin: 0 auto;">
<div id="tweet"></div></div>
<?php endif; ?>
<div class="shell">

<?php if ( !is_page_template('locpage_new.php')) { ?>

<div class="container <?php if ( !is_page_template( 'page-home.php' ) ) echo 'inner'; ?>">
<?php if ( is_page() ) : if ( $menu_slug = carbon_get_post_meta( $post->ID, '_select_menu') ) : ?>

<div id="sidebar" class="<?php if ( !is_page_template( 'page-home.php' ) ) echo 'inner';  ?>" >
<?php if ( is_page_template( 'page-home.php' ) ) : ?>

<h3 id="homeNav">Locations</h3>

<?php endif; ?>
  <div class="side-navigation">
    <?php wp_nav_menu( array(
							'menu'            => $menu_slug, 
							'container'       => false, 
						)) ?>
  </div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php } else { ?>
<div class="inner_locpage">
<div id="location_sidebar">
  
  <?php if( is_page('catskill-adult-and-pediatric-medicine')) { ?>
  <a name="locList"></a>
  <div class="leftFeeds">
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
    <h4><a href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h4>
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
    <?php wp_reset_query(); ?>
  </div>
  <!--leftFeeds-->
  <?php get_sidebar(); ?>
  <?php } else { ?>
  <?php get_sidebar(); ?>
  <a name="locList"></a>
  <?php if ( is_page() ) : if ( $menu_slug = carbon_get_post_meta( $post->ID, '_select_menu') ) : ?>
				<div class="location_menu">
				<h3 class="menu_title">Our Locations</h3>
				<?php wp_nav_menu( array(
							'menu'            => $menu_slug, 
							'container'       => false,
						)) ?>
				</div>
			<?php endif; ?><?php endif; ?>
  <!--leftFeeds-->
  
  <?php } ?>
</div>
<!--sidebar-->

<?php  } ?>
<div id="patientPortalCallout">
	<a href="https://www.mmpcemr.com:7443/prognocis/prognocis2ClinicIndex.html" target="_blank"><img src="/wp-content/themes/middletown-medical/images/pp-call.png" alt="Login to Patient Portal"></a>
	</div>
