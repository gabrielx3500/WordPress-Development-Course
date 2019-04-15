<?php 
/** Video N° 6
  * @package AlecadddPlugin
  */
/*
Plugin Name: Alecaddd Plugin
Plugin Name: http://alecaddd.com
Description: This is my first plugin
Version: 1.0.0
Author: Alessandro Cassanelli
Author Uri: htp://alecaddd.com
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/
if(!defined('ABSPATH')){
	die;
}

defined('ABSPATH') or die("Hey you don't access this file");

class AlecadddPlugin
{
	function __construct(){
      add_action('init',array($this,'custom_post_type'));
	}

	function register(){
	  add_action('admin_enqueue_scripts',array($this,'enqueue'));	
	}
	function activate(){
      $this->custom_post_type();
      //flush_rewrite_rules();
	}

	function deactivate(){
	  flush_rewrite_rules();
	}

	function uninstall(){
		
	}

	function custom_post_type(){
      register_post_type('book',['public'=>true,'label'=>'Books']);
	}

	function enqueue(){
      wp_enqueue_style('mypluginstyle',plugins_url('/assets/mystyle.css',__FILE__));
      wp_enqueue_script('mypluginscript',plugins_url('/assets/myscript.js',__FILE__));
	}
	
	
}

if(class_exists('AlecadddPlugin')){
	$alecadddPlugin = new alecadddPlugin('Alecaddd Plugin. initialized!');
	$alecadddPlugin->register();
}
//activation
register_activation_hook(__FILE__,array($alecadddPlugin,'activate'));

//deactivation
register_deactivation_hook(__FILE__,array($alecadddPlugin,'deactivate'));

//uninstall
register_deactivation_hook(__FILE__,array($alecadddPlugin,'uninstall'));
