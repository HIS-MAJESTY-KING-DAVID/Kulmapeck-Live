<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AD9cOcxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aD9cOcx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aD9cOcx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificationTemplateRepository' => ['privates', 'App\\Repository\\NotificationTemplateRepository', 'getNotificationTemplateRepositoryService', true],
            'notificationTypeRepository' => ['privates', 'App\\Repository\\NotificationTypeRepository', 'getNotificationTypeRepositoryService', true],
            'siteSettingRepository' => ['privates', 'App\\Repository\\SiteSettingRepository', 'getSiteSettingRepositoryService', false],
            'socialSettingRepository' => ['privates', 'App\\Repository\\SocialSettingRepository', 'getSocialSettingRepositoryService', false],
        ], [
            'notificationTemplateRepository' => 'App\\Repository\\NotificationTemplateRepository',
            'notificationTypeRepository' => 'App\\Repository\\NotificationTypeRepository',
            'siteSettingRepository' => 'App\\Repository\\SiteSettingRepository',
            'socialSettingRepository' => 'App\\Repository\\SocialSettingRepository',
        ]);
    }
}
