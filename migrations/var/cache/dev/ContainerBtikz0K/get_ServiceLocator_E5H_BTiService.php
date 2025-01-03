<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E5H_BTiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E5H.BTi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E5H.BTi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'enseignant' => ['privates', '.errored..service_locator.E5H.BTi.App\\Entity\\Enseignant', NULL, 'Cannot autowire service ".service_locator.E5H.BTi": it needs an instance of "App\\Entity\\Enseignant" but this type has been excluded in "config/services.yaml".'],
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'notificationRepository' => ['privates', 'App\\Repository\\NotificationRepository', 'getNotificationRepositoryService', true],
            'ntr' => ['privates', 'App\\Repository\\NotificationTemplateRepository', 'getNotificationTemplateRepositoryService', true],
        ], [
            'enseignant' => 'App\\Entity\\Enseignant',
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'notificationRepository' => 'App\\Repository\\NotificationRepository',
            'ntr' => 'App\\Repository\\NotificationTemplateRepository',
        ]);
    }
}
