<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link      https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright Copyright (c) 2014 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * Global configuration for AssetManager
 *
 * This file sets up the all assets from the vendor paths:
 * - Bootstrap
 * - Font Awesome
 * - jQuery
 *
 * @package    Application
 */
return array(
    'asset_manager'   => array(
        'resolver_configs' => array(
            'map' => array(
                'assets/vendor/bootstrap/css/bootstrap.css'                 => APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist/css/bootstrap.css',
                'assets/vendor/bootstrap/css/bootstrap.min.css'             => APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist/css/bootstrap.min.css',
                'assets/vendor/bootstrap/js/bootstrap.js'                   => APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist/js/bootstrap.js',
                'assets/vendor/bootstrap/js/bootstrap.min.js'               => APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist/js/bootstrap.min.js',
                'assets/vendor/jquery/jquery.js'                            => APPLICATION_ROOT . '/vendor/frameworks/jquery/jquery.js',
                'assets/vendor/jquery/jquery.min.js'                        => APPLICATION_ROOT . '/vendor/frameworks/jquery/jquery.min.js',
                'assets/vendor/font-awesome/css/font-awesome.css'           => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/css/font-awesome.css',
                'assets/vendor/font-awesome/css/font-awesome.min.css'       => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/css/font-awesome.min.css',
                'assets/vendor/font-awesome/fonts/fontawesome-webfont.eot'  => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/fonts/fontawesome-webfont.eot',
                'assets/vendor/font-awesome/fonts/fontawesome-webfont.svg'  => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/fonts/fontawesome-webfont.svg',
                'assets/vendor/font-awesome/fonts/fontawesome-webfont.ttf'  => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/fonts/fontawesome-webfont.ttf',
                'assets/vendor/font-awesome/fonts/fontawesome-webfont.woff' => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome/fonts/fontawesome-webfont.woff',
            ),
        ),
        'caching' => array(
            'default' => array(
                'cache'     => 'AssetManager\\Cache\\FilePathCache',
                'options' => array(
                    'dir' => 'public',
                ),
            ),
        ),
    ),
);
