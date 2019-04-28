<?php
/**
 * registering a custom dashboard widget
 * in WordPress & display data with a
 * callback function.
 * Codex: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
 */
// register the dashboard widget
add_action('wp_dashboard_setup','register_custom_dashboard_widget');
function register_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_widget_id','Widget Title','custom_dashboard_widget_content');
} 

// display widget content
function custom_dashboard_widget_content() {
	echo 'Hello! This is my Custom Dashboard Widget Content';
}
?>