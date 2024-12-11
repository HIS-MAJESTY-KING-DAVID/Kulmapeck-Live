<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CGlJyZxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cGlJyZx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cGlJyZx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'course' => ['privates', '.errored..service_locator.cGlJyZx.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.cGlJyZx": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'networkConfigRepository' => ['privates', 'App\\Repository\\NetworkConfigRepository', 'getNetworkConfigRepositoryService', true],
            'paymentMethodRepository' => ['privates', 'App\\Repository\\PaymentMethodRepository', 'getPaymentMethodRepositoryService', true],
            'paymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'course' => 'App\\Entity\\Cours',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'em' => '?',
            'networkConfigRepository' => 'App\\Repository\\NetworkConfigRepository',
            'paymentMethodRepository' => 'App\\Repository\\PaymentMethodRepository',
            'paymentRepository' => 'App\\Repository\\PaymentRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}