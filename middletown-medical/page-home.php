<?php 
/*
	Template Name:  Home Page
*/
get_header(); ?>

	<?php $slides = carbon_get_post_meta( $post->ID, '_slider', 'complex');

	if ( !empty( $slides ) ) :
	?>
	<div class="slider-holder">
		<div id="slider">
			<?php 
			foreach ( $slides as $s ) {
			 	?>
				<div class="slide">
					<a href="<?php echo $s['logo_link'] ?>#"><img src="<?php echo $s['image'] ?>" alt="" /></a>
				</div>
			 	<?php
			}
			?>
		</div>
		<div class="pagination"></div>
	</div>
<map name="Map">
  <area shape="rect" coords="31,27,171,50" href="/request-refill/" alt="Request Refill">
  <area shape="rect" coords="31,49,171,72" href="/request-an-appointment/" alt="Request an Appointment">
  <area shape="rect" coords="31,73,171,96" href="/request-lab-results/" alt="Request Lab Results">
  <area shape="rect" coords="31,95,171,118" href="/request-a-referral/" alt="Request a Referral">
</map>

	<?php endif; ?>
	
<?php get_footer(); ?>