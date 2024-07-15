<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderStatusRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\OrderStatusRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\OrderStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/OrderStatusRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] = new \Eccube\Repository\Master\OrderStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
