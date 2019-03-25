<?php
/*

 * Plugin Name: Bets Plugin
 * Description: Simple plugin for creating bets
 * Author:      Andrew
 * Version:     0.0.1
 * Domain Path: /lang

 */
//Добавляем перевод
add_action( 'plugins_loaded', 'true_load_plugin_textdomain' );
function true_load_plugin_textdomain() {
    load_plugin_textdomain( 'translating_for_bets_plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}

include_once('wp_roles.php');
include_once('wp_post_types.php');
include_once('wp_taxonomies.php');
include_once('wp_terms.php');
//при активации и деактивации запускаем нужные функции
register_activation_hook(__FILE__, 'addBetsCapsToAdmin');
register_activation_hook( __FILE__, 'createCustomRoles' );
register_deactivation_hook( __FILE__, 'removeCustomRoles' );
register_deactivation_hook( __FILE__, 'removeBetsCapsFromAdmin' );
