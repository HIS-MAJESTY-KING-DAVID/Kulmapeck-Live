<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_En7B4vFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.En7B4vF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.En7B4vF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'lectureRepository' => ['privates', 'App\\Repository\\LectureRepository', 'getLectureRepositoryService', true],
            'lesson' => ['privates', '.errored..service_locator.En7B4vF.App\\Entity\\Lesson', NULL, 'Cannot autowire service ".service_locator.En7B4vF": it needs an instance of "App\\Entity\\Lesson" but this type has been excluded in "config/services.yaml".'],
            'membreRepository' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService', true],
            'paymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService', true],
        ], [
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'lectureRepository' => 'App\\Repository\\LectureRepository',
            'lesson' => 'App\\Entity\\Lesson',
            'membreRepository' => 'App\\Repository\\MembreRepository',
            'paymentRepository' => 'App\\Repository\\PaymentRepository',
        ]);
    }
}