<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JEbB6rlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jEbB6rl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jEbB6rl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificationTemplateRepository' => ['privates', 'App\\Repository\\NotificationTemplateRepository', 'getNotificationTemplateRepositoryService', true],
        ], [
            'notificationTemplateRepository' => 'App\\Repository\\NotificationTemplateRepository',
        ]);
    }
}
