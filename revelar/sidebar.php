<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Revelar
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area <?php revelar_footer_class(); ?>" role="complementary">
	<div class="secondary-content">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="sidebar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="sidebar">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="sidebar">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div>
</div><!-- #secondary -->
