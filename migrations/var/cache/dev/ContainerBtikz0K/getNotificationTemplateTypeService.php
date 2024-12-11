<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationTemplateTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NotificationTemplateType' shared autowired service.
     *
     * @return \App\Form\NotificationTemplateType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NotificationTemplateType.php';

        return $container->privates['App\\Form\\NotificationTemplateType'] = new \App\Form\NotificationTemplateType();
    }
}