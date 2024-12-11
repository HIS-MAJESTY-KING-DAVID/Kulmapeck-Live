<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RgJF_D4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RgJF.d4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RgJF.d4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
            'course' => ['privates', '.errored..service_locator.RgJF.d4.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.RgJF.d4": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'notificationRepository' => ['privates', 'App\\Repository\\NotificationRepository', 'getNotificationRepositoryService', true],
        ], [
            'coursRepository' => 'App\\Repository\\CoursRepository',
            'course' => 'App\\Entity\\Cours',
            'notificationRepository' => 'App\\Repository\\NotificationRepository',
        ]);
    }
}
