<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvaluationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EvaluationType' shared autowired service.
     *
     * @return \App\Form\EvaluationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EvaluationType.php';

        return $container->privates['App\\Form\\EvaluationType'] = new \App\Form\EvaluationType();
    }
}
