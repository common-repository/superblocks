<?php
/**
 * Plugin Name: SuperBlocks – Best Collection of WordPress Blocks
 * Plugin URI: https://upmostly.com/superblocks
 * Description: The best collection of WordPress Blocks for web designers, bloggers, and professionals.
 * Author: Upmostly.com
 * Author URI: https://upmostly.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
