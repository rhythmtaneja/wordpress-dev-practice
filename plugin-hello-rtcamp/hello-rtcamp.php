<?php
/*
Plugin Name: Hello rtCamp
Description: A simple plugin that displays a welcome message in the admin dashboard.
Version: 1.0
Author: Rhythm Taneja
*/

add_action('admin_notices', function() {
    echo '<div class="notice notice-success is-dismissible"><p>Hello rtCamp! This is a custom plugin by Rhythm.</p></div>';
});
