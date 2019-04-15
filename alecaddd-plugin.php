<?php 
/**
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
	function activate(){
      flush_rewrite_rules();
	function deactivate(){
		
	}
	function uninstall(){
		
	}
	function custom_post_type(){
      register_post_type('book',['public'=>true,'label'=>'Books']);
	}
	
	
}

if(class_exists('AlecadddPlugin')){
	$alecadddPlugin = new alecadddPlugin('Alecaddd Plugin. initialized!');
}
//activation
register_activation_hook(__FILE__,array($alecadddPlugin,'activate'));

//deactivation
register_deactivation_hook(__FILE__,array($alecadddPlugin,'deactivate'));

//uninstall
