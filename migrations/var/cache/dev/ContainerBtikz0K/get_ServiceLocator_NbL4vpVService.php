<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NbL4vpVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NbL4vpV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NbL4vpV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'enseignant' => ['privates', '.errored..service_locator.NbL4vpV.App\\Entity\\Enseignant', NULL, 'Cannot autowire service ".service_locator.NbL4vpV": it needs an instance of "App\\Entity\\Enseignant" but this type has been excluded in "config/services.yaml".'],
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'notificationRepository' => ['privates', 'App\\Repository\\NotificationRepository', 'getNotificationRepositoryService', true],
            'ntr' => ['privates', 'App\\Repository\\NotificationTemplateRepository', 'getNotificationTemplateRepositoryService', true],
        ], [
            'enseignant' => 'App\\Entity\\Enseignant',
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'mailer' => '?',
            'notificationRepository' => 'App\\Repository\\NotificationRepository',
            'ntr' => 'App\\Repository\\NotificationTemplateRepository',
        ]);
    }
}
