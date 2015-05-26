<?php get_header();
	//mm_before_content() ?>
	<link rel="stylesheet" href="http://dev9.nextstepdigital.com/wp-content/themes/middletown-medical/blogstyle.css" type="text/css" media="screen" />

<div id="bloghead">
<img src="/wp-content/themes/middletown-medical/images/blog-photo.jpg" alt="Middletown Medical Blog">
<div id="blogbread">
<span><a href="/" class="homeBC">Home</a> </span><span> &raquo;</span><span><a href="/blog/">Blog</a> </span> <span> &raquo; </span> <span><a><?php if (is_category()) { ?>
			<!--Archive for the &#8216;--><?php single_cat_title(); ?><!--&#8217; Category-->
		<?php } elseif( is_tag() ) { ?>
			Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
		<?php } elseif (is_day()) { ?>
			Archive for <?php the_time('F jS, Y'); ?>
		<?php } elseif (is_month()) { ?>
			Archive for <?php the_time('F, Y'); ?>
		<?php } elseif (is_year()) { ?>
			Archive for <?php the_time('Y'); ?>
		<?php } elseif (is_author()) { ?>
			Author Archive
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			Blog Archives
		<?php } ?></a></span><span> &raquo;</span>
</div>
</div>

	<div id="main">
	<div class="aside">
	<?php dynamic_sidebar('blog-widgets'); ?>
	</div><!-- aside -->
	<div class="right-side">
	<h2 class="pagetitle">
		<?php if (is_category()) { ?>
			<!--Archive for the &#8216;--><?php single_cat_title(); ?><!--&#8217; Category-->
		<?php } elseif( is_tag() ) { ?>
			Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
		<?php } elseif (is_day()) { ?>
			Archive for <?php the_time('F jS, Y'); ?>
		<?php } elseif (is_month()) { ?>
			Archive for <?php the_time('F, Y'); ?>
		<?php } elseif (is_year()) { ?>
			Archive for <?php the_time('Y'); ?>
		<?php } elseif (is_author()) { ?>
			Author Archive
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			Blog Archives
		<?php } ?>
	</h2>
	<?php get_template_part('loop-arch', 'archive') ?>	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>