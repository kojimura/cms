<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityManagerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.errored..service_locator.Ue5FjLb.Doctrine\ORM\EntityManager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.Ue5FjLb": it references class "Doctrine\\ORM\\EntityManager" but no such service exists. Try changing the type-hint to "Doctrine\\ORM\\EntityManagerInterface" instead.');
    }
}
