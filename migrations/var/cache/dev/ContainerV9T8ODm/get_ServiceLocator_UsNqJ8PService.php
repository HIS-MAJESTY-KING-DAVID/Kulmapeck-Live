<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UsNqJ8PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UsNqJ8P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UsNqJ8P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'sousSystemeRepository' => ['privates', 'App\\Repository\\SousSystemeRepository', 'getSousSystemeRepositoryService', true],
        ], [
            'slugger' => '?',
            'sousSystemeRepository' => 'App\\Repository\\SousSystemeRepository',
        ]);
    }
}
