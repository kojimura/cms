<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginHistoryRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\LoginHistoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\LoginHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/LoginHistoryRepository.php';

        return $container->privates['Eccube\\Repository\\LoginHistoryRepository'] = new \Eccube\Repository\LoginHistoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($container->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())));
    }
}
