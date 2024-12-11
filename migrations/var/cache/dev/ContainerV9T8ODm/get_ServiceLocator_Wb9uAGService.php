<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wb9uAGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wb_9uAG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wb_9uAG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cours' => ['privates', '.errored..service_locator.Wb_9uAG.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.Wb_9uAG": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'membre' => ['privates', '.errored..service_locator.Wb_9uAG.App\\Entity\\Membre', NULL, 'Cannot autowire service ".service_locator.Wb_9uAG": it needs an instance of "App\\Entity\\Membre" but this type has been excluded in "config/services.yaml".'],
            'sujetRepository' => ['privates', 'App\\Repository\\SujetRepository', 'getSujetRepositoryService', true],
        ], [
            'cours' => 'App\\Entity\\Cours',
            'membre' => 'App\\Entity\\Membre',
            'sujetRepository' => 'App\\Repository\\SujetRepository',
        ]);
    }
}