<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link       https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright  Copyright (c) 2014 - 2015 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * Application module configuration
 *
 * @package    Application
 */
return array(
    'router'          => array(
        'routes' => array(
            'home' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application',
                        'controller' => 'index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'controllers'     => array(
        'invokables' => array(
            'Application\\Index' => 'Application\Controller\IndexController',
        ),
    ),

    'service_manager' => array(
        'factories' => array(
            'Session\Config' => 'Zend\Session\Service\SessionConfigFactory',
            'navigation'     => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
        'aliases'   => array(
            'translator' => 'MvcTranslator',
        ),
    ),

    'view_helpers'    => array(
        'aliases' => array(
            'h1'                      => 'zf2rapidLibH1',
            'date'                    => 'zf2rapidLibDate',
            'bootstrapFlashMessenger' => 'zf2rapidLibBootstrapFlashMessenger',
            'bootstrapForm'           => 'zf2rapidLibBootstrapForm',
            'bootstrapMenu'           => 'zf2rapidLibBootstrapMenu',
        ),
    ),

    'view_manager'    => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => include __DIR__ . '/../template_map.php',
        'template_path_stack'      => array(
            __DIR__ . '/../view',
        ),
    ),

    'translator'      => array(
        'locale'                    => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'phpArray',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.php',
            ),
        ),
    ),

    'session_config'  => array(
        'save_path' => realpath(APPLICATION_ROOT . '/data/session'),
        'name'      => 'ZF2RAPID_SESSION',
    ),

    'navigation'      => array(
        'default' => array(
            'application' => array(
                'type'       => 'mvc',
                'order'      => '100',
                'label'      => 'application_navigation_home',
                'route'      => 'home',
                'controller' => 'index',
                'action'     => 'index',
            ),
        ),
    ),
);
