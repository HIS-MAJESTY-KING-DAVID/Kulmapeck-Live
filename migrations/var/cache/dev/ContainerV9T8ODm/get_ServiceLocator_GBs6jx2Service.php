<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GBs6jx2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gBs6jx2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gBs6jx2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cours' => ['privates', '.errored..service_locator.gBs6jx2.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.gBs6jx2": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'coursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
        ], [
            'cours' => 'App\\Entity\\Cours',
            'coursRepository' => 'App\\Repository\\CoursRepository',
        ]);
    }
}
