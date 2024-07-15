<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerRemoveCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\ComposerRemoveCommand' shared autowired service.
     *
     * @return \Eccube\Command\ComposerRemoveCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerRemoveCommand.php';

        $container->privates['Eccube\\Command\\ComposerRemoveCommand'] = $instance = new \Eccube\Command\ComposerRemoveCommand(($container->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $container->load('getComposerApiServiceService')));

        $instance->setName('eccube:composer:remove');

        return $instance;
    }
}
