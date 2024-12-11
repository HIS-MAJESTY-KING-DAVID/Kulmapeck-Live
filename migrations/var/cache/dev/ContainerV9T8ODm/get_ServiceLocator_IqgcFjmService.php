<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IqgcFjmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iqgcFjm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iqgcFjm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'sousSysteme' => ['privates', '.errored..service_locator.iqgcFjm.App\\Entity\\SousSysteme', NULL, 'Cannot autowire service ".service_locator.iqgcFjm": it needs an instance of "App\\Entity\\SousSysteme" but this type has been excluded in "config/services.yaml".'],
            'sousSystemeRepository' => ['privates', 'App\\Repository\\SousSystemeRepository', 'getSousSystemeRepositoryService', true],
        ], [
            'slugger' => '?',
            'sousSysteme' => 'App\\Entity\\SousSysteme',
            'sousSystemeRepository' => 'App\\Repository\\SousSystemeRepository',
        ]);
    }
}
