<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_19S4JOSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.19S4JOS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.19S4JOS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeEnseignement' => ['privates', '.errored..service_locator.19S4JOS.App\\Entity\\TypeEnseignement', NULL, 'Cannot autowire service ".service_locator.19S4JOS": it needs an instance of "App\\Entity\\TypeEnseignement" but this type has been excluded in "config/services.yaml".'],
            'typeEnseignementRepository' => ['privates', 'App\\Repository\\TypeEnseignementRepository', 'getTypeEnseignementRepositoryService', true],
        ], [
            'typeEnseignement' => 'App\\Entity\\TypeEnseignement',
            'typeEnseignementRepository' => 'App\\Repository\\TypeEnseignementRepository',
        ]);
    }
}