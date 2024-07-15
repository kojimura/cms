<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JrgTtService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.__JrgTt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.__JrgTt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CsvType' => ['privates', '.errored..service_locator.__JrgTt.Eccube\\Entity\\Master\\CsvType', NULL, 'Cannot autowire service ".service_locator.__JrgTt": it references class "Eccube\\Entity\\Master\\CsvType" but no such service exists.'],
        ], [
            'CsvType' => 'Eccube\\Entity\\Master\\CsvType',
        ]);
    }
}
