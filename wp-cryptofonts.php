<?php

/**
 * Plugin Name: WP Cryptofonts
 * Plugin URI: https://github.com/evgrezanov/wp-cryptofonts
 * Description: This plugin add beautifully crafted cryptocurrencies font to your site.
 * Version: 1.3.0
 * Author: redmonkey73
 * Author URI: https://github.com/evgrezanov
 * License: GPL3
 * Text Domain: wp-cryptofonts
 * Domain Path: /languages
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

class WPCryptofonts {

    public static function init(){
        // регистрируем стили
        add_action('wp_enqueue_scripts', [__CLASS__,'register_plugin_styles']);
    }


    // регистрируем файл стилей и добавляем его в очередь
    public static function register_plugin_styles()
    {
        wp_register_style('wp-cryptofonts', plugins_url('wp-cryptofonts/asset/cryptofont.css'));
        wp_enqueue_style('wp-cryptofonts');
    }
}

WPCryptofonts::init();