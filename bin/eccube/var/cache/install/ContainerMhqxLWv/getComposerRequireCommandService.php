<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerRequireCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\ComposerRequireCommand' shared autowired service.
     *
     * @return \Eccube\Command\ComposerRequireCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerRequireCommand.php';

        $container->privates['Eccube\\Command\\ComposerRequireCommand'] = $instance = new \Eccube\Command\ComposerRequireCommand(($container->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $container->load('getComposerApiServiceService')));

        $instance->setName('eccube:composer:require');

        return $instance;
    }
}
