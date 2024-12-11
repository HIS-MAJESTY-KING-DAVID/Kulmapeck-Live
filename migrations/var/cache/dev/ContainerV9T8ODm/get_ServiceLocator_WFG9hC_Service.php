<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WFG9hC_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WFG9hC.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WFG9hC.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'networkConfigRepository' => ['privates', 'App\\Repository\\NetworkConfigRepository', 'getNetworkConfigRepositoryService', true],
            'paginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'networkConfigRepository' => 'App\\Repository\\NetworkConfigRepository',
            'paginatorInterface' => '?',
        ]);
    }
}
