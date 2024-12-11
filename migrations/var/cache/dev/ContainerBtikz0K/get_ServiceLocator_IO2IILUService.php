<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IO2IILUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iO2IILU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iO2IILU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'specialite' => ['privates', '.errored..service_locator.iO2IILU.App\\Entity\\Specialite', NULL, 'Cannot autowire service ".service_locator.iO2IILU": it needs an instance of "App\\Entity\\Specialite" but this type has been excluded in "config/services.yaml".'],
            'specialiteRepository' => ['privates', 'App\\Repository\\SpecialiteRepository', 'getSpecialiteRepositoryService', true],
        ], [
            'specialite' => 'App\\Entity\\Specialite',
            'specialiteRepository' => 'App\\Repository\\SpecialiteRepository',
        ]);
    }
}
