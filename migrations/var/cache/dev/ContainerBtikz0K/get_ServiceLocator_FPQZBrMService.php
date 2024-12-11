<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FPQZBrMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FPQZBrM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FPQZBrM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'paginatorInterface' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}