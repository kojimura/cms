<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginUninstallCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\PluginUninstallCommand' shared autowired service.
     *
     * @return \Eccube\Command\PluginUninstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/PluginUninstallCommand.php';

        $container->privates['Eccube\\Command\\PluginUninstallCommand'] = $instance = new \Eccube\Command\PluginUninstallCommand();

        $instance->setPluginService(($container->services['Eccube\\Service\\PluginService'] ?? $container->load('getPluginServiceService')));
        $instance->setPluginRepository(($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->load('getPluginRepositoryService')));
        $instance->setName('eccube:plugin:uninstall');

        return $instance;
    }
}
