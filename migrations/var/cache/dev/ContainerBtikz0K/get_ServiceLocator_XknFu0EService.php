<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XknFu0EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XknFu0E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XknFu0E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
            'examRepository' => ['privates', 'App\\Repository\\ExamRepository', 'getExamRepositoryService', true],
            'paginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'skillLevelRepository' => ['privates', 'App\\Repository\\SkillLevelRepository', 'getSkillLevelRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'classeRepository' => 'App\\Repository\\ClasseRepository',
            'examRepository' => 'App\\Repository\\ExamRepository',
            'paginatorInterface' => '?',
            'skillLevelRepository' => 'App\\Repository\\SkillLevelRepository',
        ]);
    }
}
