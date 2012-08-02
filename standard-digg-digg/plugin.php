<?php
/*
Plugin Name: Standard Digg Digg
Plugin URI: http://github.com/eightbit/standard-digg-digg
Description: Repositions the Digg Digg sharer based on the post's format.
Version: 0.1
Author: Tom McFarlin
Author URI: http://tommcfarlin.com
Author Email: tom@8bit.io
License:

  Copyright 2012 Tom McFarlin (tom@8bit.io)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

class Standard_Digg_Digg {
	 
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
	
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( &$this, 'reposition_digg_digg' ), 200, 0 );		
	} // end constructor
	
	/*--------------------------------------------*
	 * Filters
	 *--------------------------------------------*/
	
	/**
	 * Registers and enqueues the scripts responsible for repositioning the Digg Digg sharer.
	 */
	function reposition_digg_digg() {
	
		wp_register_script( 'standard-digg-digg', plugins_url( '/standard-digg-digg/js/standard-digg-digg.min.js' ), array( 'jquery' ), false, true );
		wp_enqueue_script( 'standard-digg-digg' );
		
	} // end reposition_digg_digg

} // end class

new Standard_Digg_Digg();
?>