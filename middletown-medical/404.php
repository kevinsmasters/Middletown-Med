<?php get_header(); 
	mm_before_content() ?>
	<style>#recipe-sidenav { display: none; }</style>
		<h2 class="pagetitle"><?php _e('Error 404 - Not Found'); ?></h2>
		<p><?php printf(__('Please check the URL for proper spelling and capitalization. If you\'re having trouble locating a destination, try visiting the <a href="%1$s">home page</a>'), get_option('home')); ?></p>
<?php get_footer(); ?>