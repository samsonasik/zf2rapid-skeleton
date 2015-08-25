<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link      https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
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
            'aliases' => array(
                'assets/vendor/bootstrap/'   => APPLICATION_ROOT . '/vendor/twitter/bootstrap/dist',
                'assets/vendor/jquery'       => APPLICATION_ROOT . '/vendor/frameworks/jquery',
                'assets/vendor/font-awesome' => APPLICATION_ROOT . '/vendor/fortawesome/font-awesome',
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
