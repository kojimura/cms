<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainEditTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\MainEditType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\MainEditType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/MainEditType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\MainEditType'] = new \Eccube\Form\Type\Admin\MainEditType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? $container->load('getDeviceTypeRepositoryService')), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
