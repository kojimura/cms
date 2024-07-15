<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCouponDetailRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\Coupon42\Repository\CouponDetailRepository' shared autowired service.
     *
     * @return \Plugin\Coupon42\Repository\CouponDetailRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/Coupon42/Repository/CouponDetailRepository.php';

        return $container->privates['Plugin\\Coupon42\\Repository\\CouponDetailRepository'] = new \Plugin\Coupon42\Repository\CouponDetailRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
