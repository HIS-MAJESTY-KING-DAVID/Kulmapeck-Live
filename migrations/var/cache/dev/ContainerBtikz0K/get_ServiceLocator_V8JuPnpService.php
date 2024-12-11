<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V8JuPnpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v8JuPnp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v8JuPnp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fAQRepository' => ['privates', 'App\\Repository\\FAQRepository', 'getFAQRepositoryService', true],
        ], [
            'fAQRepository' => 'App\\Repository\\FAQRepository',
        ]);
    }
}
