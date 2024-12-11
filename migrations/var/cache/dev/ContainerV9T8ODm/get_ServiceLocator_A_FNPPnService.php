<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A_FNPPnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a.FNPPn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a.FNPPn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filiere' => ['privates', '.errored..service_locator.a.FNPPn.App\\Entity\\Filiere', NULL, 'Cannot autowire service ".service_locator.a.FNPPn": it needs an instance of "App\\Entity\\Filiere" but this type has been excluded in "config/services.yaml".'],
            'filiereRepository' => ['privates', 'App\\Repository\\FiliereRepository', 'getFiliereRepositoryService', true],
        ], [
            'filiere' => 'App\\Entity\\Filiere',
            'filiereRepository' => 'App\\Repository\\FiliereRepository',
        ]);
    }
}
