<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E63WOfvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E63WOfv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E63WOfv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'examRepository' => ['privates', 'App\\Repository\\ExamRepository', 'getExamRepositoryService', true],
            'paginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'examRepository' => 'App\\Repository\\ExamRepository',
            'paginatorInterface' => '?',
        ]);
    }
}
