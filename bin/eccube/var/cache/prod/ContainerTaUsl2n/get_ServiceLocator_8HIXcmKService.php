<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8HIXcmKService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.8HIXcmK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8HIXcmK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Member' => ['privates', '.errored..service_locator.8HIXcmK.Eccube\\Entity\\Member', NULL, 'Cannot autowire service ".service_locator.8HIXcmK": it references class "Eccube\\Entity\\Member" but no such service exists.'],
        ], [
            'Member' => 'Eccube\\Entity\\Member',
        ]);
    }
}
