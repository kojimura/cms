<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLayoutControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Content\LayoutController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Content\LayoutController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/LayoutController.php';

        $container->services['Eccube\\Controller\\Admin\\Content\\LayoutController'] = $instance = new \Eccube\Controller\Admin\Content\LayoutController(($container->privates['Eccube\\Repository\\BlockRepository'] ?? $container->load('getBlockRepositoryService')), ($container->privates['Eccube\\Repository\\BlockPositionRepository'] ?? $container->load('getBlockPositionRepositoryService')), ($container->privates['Eccube\\Repository\\LayoutRepository'] ?? $container->load('getLayoutRepositoryService')), ($container->privates['Eccube\\Repository\\PageLayoutRepository'] ?? $container->load('getPageLayoutRepositoryService')), ($container->privates['Eccube\\Repository\\PageRepository'] ?? $container->load('getPageRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()), ($container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? $container->load('getDeviceTypeRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.1yawm5B'] ?? $container->load('get_ServiceLocator_1yawm5BService'))->withContext('Eccube\\Controller\\Admin\\Content\\LayoutController', $container));

        return $instance;
    }
}
