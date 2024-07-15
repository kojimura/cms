<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTradeLawControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Setting\Shop\TradeLawController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Setting\Shop\TradeLawController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TradeLawController.php';

        $container->services['Eccube\\Controller\\Admin\\Setting\\Shop\\TradeLawController'] = $instance = new \Eccube\Controller\Admin\Setting\Shop\TradeLawController(($container->privates['Eccube\\Repository\\TradeLawRepository'] ?? $container->load('getTradeLawRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.1yawm5B'] ?? $container->load('get_ServiceLocator_1yawm5BService'))->withContext('Eccube\\Controller\\Admin\\Setting\\Shop\\TradeLawController', $container));

        return $instance;
    }
}
