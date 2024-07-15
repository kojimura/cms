<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCouponOrderRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\Coupon42\Repository\CouponOrderRepository' shared autowired service.
     *
     * @return \Plugin\Coupon42\Repository\CouponOrderRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/Coupon42/Repository/CouponOrderRepository.php';

        return $container->privates['Plugin\\Coupon42\\Repository\\CouponOrderRepository'] = new \Plugin\Coupon42\Repository\CouponOrderRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
