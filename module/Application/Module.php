<?php
/**
 * ZF2rapid skeleton application
 *
 * @package    Application
 * @link       https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright  Copyright (c) 2014 - 2015 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 *
 * @todo       Texts in module need to be translated
 */

/**
 * namespace definition and usage
 */
namespace Application;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use ZF2rapidLib\View\LayoutListener;

/**
 * Application module class
 *
 * @package    Application
 */
class Module implements
    BootstrapListenerInterface,
    ConfigProviderInterface,
    AutoloaderProviderInterface
{
    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     *
     * @return void
     */
    public function onBootstrap(EventInterface $e)
    {
        /** @var MvcEvent $e */
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        // add layout listener
        $eventManager->attachAggregate(
            new LayoutListener(array('header', 'footer'))
        );

        // configure session
        $e->getApplication()->getServiceManager()->get('Session\Config');
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __NAMESPACE__ => __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
