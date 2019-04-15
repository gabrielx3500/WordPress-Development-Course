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
	function activate(){
      echo "The Plugin was activated";
	}
	function deactivate(){
		
	}
	function uninstall(){
		
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
register_uninstall_hook(__FILE__,array($alecadddPlugin,'uninstall'));