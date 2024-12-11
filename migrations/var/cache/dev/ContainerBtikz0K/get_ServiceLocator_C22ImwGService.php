<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C22ImwGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c22ImwG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c22ImwG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'notificationRepository' => ['privates', 'App\\Repository\\NotificationRepository', 'getNotificationRepositoryService', true],
        ], [
            'coursRepository' => 'App\\Repository\\CoursRepository',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'notificationRepository' => 'App\\Repository\\NotificationRepository',
        ]);
    }
}
