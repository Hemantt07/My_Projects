<?php

/**
* 
* @package CustomPlugin
* 
**/
namespace Inc\Base;

class Enequeue
{
	public function register () {
		add_action('admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	function enqueue()
	{
		// enqueue
		wp_enqueue_style( 'pluginStyle', PLUGIN_URL . '/assets/mystyle.css' );
		wp_enqueue_script( 'pluginScript', PLUGIN_URL . '/assets/myscript.js' );
	}
}


