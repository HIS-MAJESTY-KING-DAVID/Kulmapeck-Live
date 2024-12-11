<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AjDOBVrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ajDOBVr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ajDOBVr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'etablissement' => ['privates', '.errored..service_locator.ajDOBVr.App\\Entity\\Etablissement', NULL, 'Cannot autowire service ".service_locator.ajDOBVr": it needs an instance of "App\\Entity\\Etablissement" but this type has been excluded in "config/services.yaml".'],
            'etablissementRepository' => ['privates', 'App\\Repository\\EtablissementRepository', 'getEtablissementRepositoryService', true],
        ], [
            'etablissement' => 'App\\Entity\\Etablissement',
            'etablissementRepository' => 'App\\Repository\\EtablissementRepository',
        ]);
    }
}
