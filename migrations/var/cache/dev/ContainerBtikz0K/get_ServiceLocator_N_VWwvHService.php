<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N_VWwvHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n.vWwvH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n.vWwvH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'httpKernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
        ], [
            'eventDispatcher' => '?',
            'httpKernel' => '?',
        ]);
    }
}
