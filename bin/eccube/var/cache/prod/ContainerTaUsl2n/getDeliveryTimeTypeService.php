<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryTimeTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\DeliveryTimeType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\DeliveryTimeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/DeliveryTimeType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\DeliveryTimeType'] = new \Eccube\Form\Type\Admin\DeliveryTimeType();
    }
}
