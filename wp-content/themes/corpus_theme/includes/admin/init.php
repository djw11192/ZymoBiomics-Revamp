<?php
/**
 * Loads code for admin purpose.
 */

/**
 * Define CORPUS_INCLUDES_ADMIN_DIR constant
 */
define('CORPUS_INCLUDES_ADMIN_DIR' , get_template_directory() . '/includes/admin/' );

/**
 * Define CORPUS_INCLUDES_ADMIN_LIB_DIR constant
 */
define('CORPUS_INCLUDES_ADMIN_LIB_DIR' , CORPUS_INCLUDES_ADMIN_DIR . 'lib/' );

/**
 * Options Framework
 */
require_once 'lib/options-framework/init.php';

/**
 * CMB2
 */
require_once 'lib/cmb2/init.php';

/**
 * Admin functions
 */
require_once CORPUS_INCLUDES_ADMIN_DIR . 'admin-functions.php';