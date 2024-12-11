<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_80wW8wgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.80wW8wg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.80wW8wg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cours' => ['privates', '.errored..service_locator.80wW8wg.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.80wW8wg": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'eleve' => ['privates', '.errored..service_locator.80wW8wg.App\\Entity\\Eleve', NULL, 'Cannot autowire service ".service_locator.80wW8wg": it needs an instance of "App\\Entity\\Eleve" but this type has been excluded in "config/services.yaml".'],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
        ], [
            'cours' => 'App\\Entity\\Cours',
            'eleve' => 'App\\Entity\\Eleve',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
        ]);
    }
}
