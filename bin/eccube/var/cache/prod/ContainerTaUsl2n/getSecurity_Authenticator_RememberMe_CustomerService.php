<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMe_CustomerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.remember_me.customer' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/RememberMeAuthenticator.php';

        return $container->privates['security.authenticator.remember_me.customer'] = new \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator(($container->privates['security.authenticator.remember_me_handler.customer'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_CustomerService')), $container->getEnv('ECCUBE_AUTH_MAGIC'), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), 'eccube_remember_me', ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
