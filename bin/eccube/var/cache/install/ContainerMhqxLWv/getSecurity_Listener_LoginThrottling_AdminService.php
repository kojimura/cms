<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_LoginThrottling_AdminService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'security.listener.login_throttling.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/LoginThrottlingListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RateLimiter/RequestRateLimiterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RateLimiter/AbstractRequestRateLimiter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RateLimiter/DefaultLoginRateLimiter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/CacheStorage.php';

        $a = ($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService'));

        return $container->privates['security.listener.login_throttling.admin'] = new \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\Security\Http\RateLimiter\DefaultLoginRateLimiter(new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 25, 'interval' => '30 minutes', 'id' => '_login_global_admin'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), NULL), new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 5, 'interval' => '30 minutes', 'id' => '_login_local_admin'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), NULL)));
    }
}
