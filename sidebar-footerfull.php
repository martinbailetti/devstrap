<?php
/**
 * Sidebar setup for footer full.
 *
 * @package devstrap
 */

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<?php dynamic_sidebar( 'footerfull' ); ?>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>