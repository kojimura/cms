<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\JobRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\JobRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/JobRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\JobRepository'] = new \Eccube\Repository\Master\JobRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
