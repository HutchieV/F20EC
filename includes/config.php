<?php
	// Non-production error reporting
 	// ini_set('display_errors', 1);
 	// ini_set('display_startup_errors', 1);
 	// error_reporting(E_ALL);

	// Set this directory as the default includes directory
	set_include_path(dirname(__FILE__));

	// Start a new session or link this request with an existing one
	// based on the PHPSESSION cookie
 	session_start();

	// Regenerate the sesson key for security
 	session_regenerate_id();
?>
