<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3PqNSeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3PqNSe_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3PqNSe_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evaluation' => ['privates', '.errored..service_locator.3PqNSe_.App\\Entity\\Evaluation', NULL, 'Cannot autowire service ".service_locator.3PqNSe_": it needs an instance of "App\\Entity\\Evaluation" but this type has been excluded in "config/services.yaml".'],
            'evaluationRepository' => ['privates', 'App\\Repository\\EvaluationRepository', 'getEvaluationRepositoryService', false],
        ], [
            'evaluation' => 'App\\Entity\\Evaluation',
            'evaluationRepository' => 'App\\Repository\\EvaluationRepository',
        ]);
    }
}
