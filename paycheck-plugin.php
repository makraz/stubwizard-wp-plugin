<?php

/**
 *
 * Plugin name: Paycheck
 * Description: Plugin for paycheck calculator
 * Version: 1.0.0
 * Text Domain: paycheck-plugin
 *
 */

if(!defined('ABSPATH')){
    die();
}

if( !class_exists('PayCheck')){


    class PayCheck
    {
        public function __construct()
        {
            define('PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));
            require_once(PLUGIN_PATH . 'includes/paycheck-form.php');
        }
    }
}

$paycheck = new PayCheck();


