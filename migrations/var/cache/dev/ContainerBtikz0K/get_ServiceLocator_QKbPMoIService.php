<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QKbPMoIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qKbPMoI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qKbPMoI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cours' => ['privates', '.errored..service_locator.qKbPMoI.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.qKbPMoI": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'membreRepository' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService', true],
            'sujet' => ['privates', '.errored..service_locator.qKbPMoI.App\\Entity\\Sujet', NULL, 'Cannot autowire service ".service_locator.qKbPMoI": it needs an instance of "App\\Entity\\Sujet" but this type has been excluded in "config/services.yaml".'],
        ], [
            'cours' => 'App\\Entity\\Cours',
            'membreRepository' => 'App\\Repository\\MembreRepository',
            'sujet' => 'App\\Entity\\Sujet',
        ]);
    }
}
