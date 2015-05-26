<?php

/*

	Template Name:  Pod Page */

 get_header(); ?>
<script>
function loadXMLDoc(specName)
{
/*var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("staffList").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/services/specialty-medicine/"+specName+"/",true);
xmlhttp.send(); */
console.log("waiting");
jQuery('#waitScreen').css('display','block');
jQuery('#waitScreen').html('<div id="waitSpin"></div>');
jQuery('#staffList').load(''+specName+' #specialList', function() {
//alert( "Load was performed." );
console.log("done");
jQuery('#waitScreen').css('display','none');
jQuery('.bioShort:empty').siblings('a').css('display','none');
	jQuery('.bioShort:empty').siblings('h2').children().contents().unwrap();
});
}
</script>

<div id="sidebar" class="inner">
  <div class="side-navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
  </div>
</div>
<!-- sidebar -->
<div id="content">
  <h2 class="content-head"><span>OUR STAFF A TO Z</span></h2>
  <div class="image-holder" style="height: 323px;"> <img width="680" height="238" alt="stethoscope-with-apple" src="/wp-content/uploads/2013/05/stethoscope-with-apple-680x238.jpg" style="height: 323px;">
<div class="options">
  <?php //wp_nav_menu( array( 'theme_location' => 'staff-a-z-menu' ) ); ?>
</div>
  </div>
</div>
</div>
<div id="main">
<div class="aside">
  <ul>
    <?php dynamic_sidebar( 'general-sidebar' ); ?>
  </ul>
</div>
<div class="right-side">
  <div class="box">
    <div class="locCombo">
      <h3>Filter by location</h3>
<ul class="locNav">
        <li><span onclick="loadXMLDoc('/about-us/locations/bloomingburg/')">Bloomingburg</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/chester-center/')">Chester</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/ellenville/')">Ellenville</span></li>
		 <li><span onclick="loadXMLDoc('/about-us/locations/george-giovannone-physical-therapy/')">George Giovannone Physical Therapy</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/liberty/')">Liberty Medical Group</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/middletown/')">Middletown</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/port-jervis/')">Port Jervis</span></li>
	<li><span onclick="loadXMLDoc('/about-us/locations/sullivan/')">Sullivan Internal Medicine Group</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/warwick/')">Warwick</span></li>
        <li><span onclick="loadXMLDoc('/about-us/locations/wurtsboro/')">Wurtsboro</span></li>
      </ul>
    </div>
    <div class="specCombo">
      <h3>Filter by specialty</h3>
      <ul class="specNav">
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/allergy-immunology')">Allergy &amp; Immunology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/cardiology')">Cardiology</span></li>
        <!--<li><span onclick="loadXMLDoc(/services/specialty-medicine/'dermatology')">Dermatology</span></li>-->
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/dieticians')">Diabetic Counseling</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/dieticians')">Dieticians</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/endocrinology')">Endocrinology</span></li>
        <li><span onclick="loadXMLDoc('/services/primary-family-medicine')">Family Medicine</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/gastroenterology')">Gastroenterology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/gynecology')">Gynecology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/nephrology')">Nephrology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/neurology')">Neurology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/ophthalmology')">Ophthalmology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/orthopedics')">Orthopedics</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/pain-management-rehabilitation')">Pain Management &amp; Rehabilitation</span></li>
        <!--<li><span onclick="loadXMLDoc('/services/specialty-medicine/psychotherapy-counseling')">Psychotherapy/Counseling</span></li>-->
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/pulmonary-medicine')">Pulmonary Medicine</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/rheumatology')">Rheumatology</span></li>
        <li><span onclick="loadXMLDoc('/services/specialty-medicine/urology')">Urology</span></li>
      </ul>
    </div>
  </div><?php /*
  <div class="rightFeeds">
            	<h3>Recent News</h3>
              
              
              <?php $ptag = get_post_meta($post->ID, 'tagged with', true); ?>
			  <?php $ttag = 'staff' ?>
                
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
	$recentFB->query('category_name=testimonial&orderby=rand&showposts=1&tag=staff');
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
  <div class="box" id="staffList">
    <?php pods_content(); ?>
  </div>
</div>

<script>

				jQuery(document).ready(function() {
							jQuery('.staffForms a').each(function () {
								var docName = jQuery(this).parent().siblings('h2').html();
								docName = jQuery(docName).text();						

								locName = jQuery(this).parent().siblings('.staffLoc').children('a').eq(0).html();
								locName = jQuery(locName).text();															

								var _href = jQuery(this).attr("href"); 
								if (! jQuery(this).hasClass('noqstr')) {
								jQuery(this).attr("href", _href + '?doc=' + docName + '&loc=' + locName);
								}
								console.log ('location' + locName);							

							});

							

							

						/*

  							 var _href = jQuery(this).attr("href"); 

   						jQuery(this).attr("href", _href + formquery + '&loc=' + formloc);

						*/

						

					});

				</script>
				<div id="waitScreen"></div>
<?php get_footer(); ?>