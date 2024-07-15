<?php

namespace ContainerMhqxLWv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchProductTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\SearchProductType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\SearchProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/SearchProductType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\SearchProductType'] = new \Eccube\Form\Type\Admin\SearchProductType(($container->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] ?? $container->load('getProductStatusRepositoryService')), ($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\TagRepository'] ?? $container->load('getTagRepositoryService')));
    }
}
