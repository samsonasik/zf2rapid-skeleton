<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link       https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright  Copyright (c) 2014 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * Development configuration
 *
 * Use this file to overwrite all configuration from the global configuration
 * and from all the loaded modules. This config can be overwritten by local
 * configuration.
 *
 * @package    Application
 */
return array(
    'db' => array(
        'driver'  => 'pdo',
        'dsn'     => 'mysql:dbname=zf2rapid;host=localhost;charset=utf8',
        'user'    => 'zf2rapid',
        'pass'    => 'zf2rapid',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'ZF2rapidLib\Db\Adapter\ProfilingAdapterFactory',
        ),
    ),
);
