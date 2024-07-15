<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwoFactorAuthControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Setting\System\TwoFactorAuthController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Setting\System\TwoFactorAuthController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/TwoFactorAuthController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/TwoFactorAuthService.php';

        $a = ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService'));
        $b = ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container)));

        $container->services['Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController'] = $instance = new \Eccube\Controller\Admin\Setting\System\TwoFactorAuthController($a, ($container->privates['Eccube\\Repository\\MemberRepository'] ?? $container->load('getMemberRepositoryService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), new \Eccube\Service\TwoFactorAuthService($container, $b, $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));

        $instance->setEccubeConfig($b);
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.1yawm5B'] ?? $container->load('get_ServiceLocator_1yawm5BService'))->withContext('Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController', $container));

        return $instance;
    }
}
