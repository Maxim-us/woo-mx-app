<?php
/**
 * The sidebar containing the main widget area
 *
 * @package woo-mx-app
 */

// Exit, if there are no widgets, and the current user is not an administrator
if ( ! is_active_sidebar( 'sidebar-right' ) &&
	wp_get_current_user()->roles[0] !== 'administrator' ) {

	return;

}

$class_col = 'col-4';

if ( is_page_template( 'page_two_sidebars.php' ) ) {

	$class_col = 'col-3';

}
?>

<aside id="secondary-right" class="widget-area <?php echo $class_col; ?>">

	<?php if ( ! is_active_sidebar( 'sidebar-right' ) ) : ?>

		<?php printf(
			esc_html__( '%1$sTime to add some widgets!%2$s', 'woo-mx-app' ),
			'<a href="' . get_admin_url( null, 'widgets.php' ) . '">', '</a>'
		); ?>

	<?php else : ?>
		
		<?php dynamic_sidebar( 'sidebar-right' ); ?>

	<?php endif; ?>
</aside><!-- #secondary-right -->
