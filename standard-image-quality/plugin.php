<?php
/*
Plugin Name: Standard Image Quality
Plugin URI: https://github.com/eightbit/plugins/tree/master/standard-image-quality
Description: Changes WordPress' default image quality from 90% to 100%.
Version: 1.0
Author: Michael Novotny
Author URI: http://manovotny.com
Author Email: michael@8bit.io
License: GNU General Public License v3.0 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

class Standard_Image_Quality {
	 
	/* Constructor
	---------------------------------------------------------------------------------- */
	
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
	
		// jpeg quality filter
		add_filter( 'jpeg_quality', 'full_jpeg_quality' );
	
	} // end constructor
	
	
	/* Filters
	---------------------------------------------------------------------------------- */
	
	/**
	 * Returns full quality jpeg's.
	 */
	function full_jpeg_quality() {
	
		return 100;
		
	} // end full_jpg_quality

} // end class


// instantiate plugin
new Standard_Image_Quality();


?>