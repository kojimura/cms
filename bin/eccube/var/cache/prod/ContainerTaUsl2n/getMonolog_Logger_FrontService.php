<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_FrontService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.front' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.front'] = $instance = new \Symfony\Bridge\Monolog\Logger('front');

        $instance->pushProcessor(($container->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $container->getSessionProcessorService()));
        $instance->pushProcessor(($container->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $container->getTokenProcessorService()));
        $instance->pushProcessor(($container->privates['Monolog\\Processor\\UidProcessor'] ?? ($container->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
        $instance->pushProcessor(($container->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($container->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor(100, [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
        $instance->pushProcessor(($container->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $container->getWebProcessorService()));
        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($container->privates['monolog.handler.front'] ?? $container->getMonolog_Handler_FrontService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        return $instance;
    }
}
