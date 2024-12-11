<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NaOR5osService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.naOR5os' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.naOR5os'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'term' => ['privates', '.errored..service_locator.naOR5os.App\\Entity\\Term', NULL, 'Cannot autowire service ".service_locator.naOR5os": it needs an instance of "App\\Entity\\Term" but this type has been excluded in "config/services.yaml".'],
            'termRepository' => ['privates', 'App\\Repository\\TermRepository', 'getTermRepositoryService', true],
        ], [
            'term' => 'App\\Entity\\Term',
            'termRepository' => 'App\\Repository\\TermRepository',
        ]);
    }
}