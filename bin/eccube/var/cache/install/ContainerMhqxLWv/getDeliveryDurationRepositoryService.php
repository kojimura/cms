<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryDurationRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\DeliveryDurationRepository' shared autowired service.
     *
     * @return \Eccube\Repository\DeliveryDurationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/DeliveryDurationRepository.php';

        return $container->privates['Eccube\\Repository\\DeliveryDurationRepository'] = new \Eccube\Repository\DeliveryDurationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
