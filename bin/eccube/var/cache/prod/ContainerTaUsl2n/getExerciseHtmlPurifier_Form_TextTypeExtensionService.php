<?php

namespace ContainerTaUsl2n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_Form_TextTypeExtensionService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'exercise_html_purifier.form.text_type_extension' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\Form\TypeExtension\HTMLPurifierTextTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/Form/TypeExtension/HTMLPurifierTextTypeExtension.php';

        return $container->privates['exercise_html_purifier.form.text_type_extension'] = new \Exercise\HTMLPurifierBundle\Form\TypeExtension\HTMLPurifierTextTypeExtension(($container->privates['exercise_html_purifier.purifiers_registry'] ?? $container->load('getExerciseHtmlPurifier_PurifiersRegistryService')));
    }
}
