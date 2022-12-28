<?php 

namespace Inc;

final class Init
{

	/**
	 * Store all the classes inside an array
	 * @return array full of all classes 
	 * 
	 * 
	 **/

	public static function get_services()
	{
		return [
			Pages\Admin::class,
			Base\Enequeue::class
		];
	}

	/**
	 * Loop through all classes, initialize them,
	 * call the register() method if it exists.
	 * @return 
	 **/

	public static function register_services()
	{
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service , 'register') ) {
				$service->register();
			}
		}
	}

	/**
	 * Initialize the class
	 * @param Class $class class from the service array 
	 * @return  class instance  new instance of the class
	 **/

	private static function instantiate( $class )
	{
		$service = new $class();

		return $service;
	}
}


// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// require_once plugin_dir_path( __FILE__ ) . 'inc\Admin\AdminPages.php';

// if ( !class_exists( 'CustomPlugin' ) ) {

// 	class CustomPlugin
// 	{

// 		public $plugin;

// 		function __construct() {
// 			$this->plugin = plugin_basename( __FILE__ );
// 		}

// 		function register()
// 		{
// 			add_action('admin_enqueue_scripts', array( $this, 'enqueue' ) );

// 			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

// 			add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
// 		}

// 		public function settings_link( $links ) {
// 			$settings_link = '<a href="admin.php?page=CustomPlugin">Settings</a>';
// 			array_push( $links, $settings_link );
// 			return $links;
// 		}	

		// public function add_admin_pages() {
		// 	add_menu_page( 'Custom plugin', 'Newsletter', 'manage_options', 'custom_plugin', array( $this, 'admin_index'  ), 'dashicons-format-aside' ,110 );
		// }

		// public function admin_index()
		// {
		// 	require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
		// }

// 		protected function create_post_type() {
// 			add_action( 'init', array( $this, 'custom_post_type' ) );
// 		}

// 		function custom_post_type()
// 		{
// 			register_post_type( 'newsLetter', ['public' => true, 'label' => 'News Letter'] );
// 		}

		// function enqueue()
		// {
		// 	// enqueue
		// 	wp_enqueue_style( 'pluginStyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
		// 	wp_enqueue_script( 'pluginScript', plugins_url( '/assets/myscript.js', __FILE__ ) );
		// }

// 		function activate() {
// 			Activate::activate();
// 		}

// 		function deactivate() {
// 			Deactivate::deactivate();
// 		}	
// 	}

// 	$customPlugin = new CustomPlugin();
// 	$customPlugin->register();


// 	// activation
// 	register_activation_hook( __FILE__, array( $customPlugin, 'activate' ) );

// 	// deactivation
// 	register_deactivation_hook( __FILE__, array( $customPlugin, 'deactivate' ) );
// }
