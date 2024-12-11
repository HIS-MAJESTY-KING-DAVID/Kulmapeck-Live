<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKHVPkCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKHVPkC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKHVPkC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classeRepository' => ['privates', 'App\\Repository\\ClasseRepository', 'getClasseRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'classeRepository' => 'App\\Repository\\ClasseRepository',
            'slugger' => '?',
        ]);
    }
}
