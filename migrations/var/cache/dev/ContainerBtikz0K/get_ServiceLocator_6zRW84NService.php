<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6zRW84NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6zRW84N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6zRW84N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mediaRepository' => ['privates', 'App\\Repository\\MediaRepository', 'getMediaRepositoryService', true],
        ], [
            'mediaRepository' => 'App\\Repository\\MediaRepository',
        ]);
    }
}
