<?php
/*
Plugin Name: Standard Disable Comments
Plugin URI: https://github.com/eightbit/plugins/tree/master/standard-disable-comments
Description: Completely disables comments and pings across the entire website.
Version: 1.0
Author: Michael Novotny
Author URI: http://manovotny.com
Author Email: michael@8bit.io
License: GNU General Public License v3.0 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

class Standard_Disable_Comments {
	 
	/* Constructor
	---------------------------------------------------------------------------------- */
	
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
	
		// comments open filter
		add_action( 'comments_open', array( &$this, 'disable_comments' ), 20, 2 );
		
		// pings open filter
		add_action( 'pings_open', array( &$this, 'disable_comments' ), 20, 2 );
	
	} // end constructor
	
	
	/* Filters
	---------------------------------------------------------------------------------- */
	
	/**
	 * Disables comments across the entire site.
	 */
	function disable_comments() {
	
		return false;
		
	} // end disable_comments

} // end class


// instantiate plugin
new Standard_Disable_Comments();


?>