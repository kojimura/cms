<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordEncoderService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Security\Core\Encoder\PasswordEncoder' shared autowired service.
     *
     * @return \Eccube\Security\Core\Encoder\PasswordEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/PasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Core/Encoder/PasswordEncoder.php';

        return $container->privates['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] = new \Eccube\Security\Core\Encoder\PasswordEncoder(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
