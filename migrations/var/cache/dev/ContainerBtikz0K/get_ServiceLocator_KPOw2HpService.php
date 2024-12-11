<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KPOw2HpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KPOw2Hp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KPOw2Hp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnement' => ['privates', '.errored..service_locator.KPOw2Hp.App\\Entity\\Abonnement', NULL, 'Cannot autowire service ".service_locator.KPOw2Hp": it needs an instance of "App\\Entity\\Abonnement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'abonnement' => 'App\\Entity\\Abonnement',
        ]);
    }
}
