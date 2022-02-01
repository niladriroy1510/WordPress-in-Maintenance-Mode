<?php

function wp_maintenance_mode() {
	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
		wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
	}
}
add_action('get_header', 'wp_maintenance_mode');