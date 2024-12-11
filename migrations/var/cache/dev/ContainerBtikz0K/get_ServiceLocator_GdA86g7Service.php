<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GdA86g7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GdA86g7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GdA86g7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classe' => ['privates', '.errored..service_locator.GdA86g7.App\\Entity\\Classe', NULL, 'Cannot autowire service ".service_locator.GdA86g7": it needs an instance of "App\\Entity\\Classe" but this type has been excluded in "config/services.yaml".'],
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
        ], [
            'classe' => 'App\\Entity\\Classe',
            'classeRepository' => 'App\\Repository\\ClasseRepository',
        ]);
    }
}