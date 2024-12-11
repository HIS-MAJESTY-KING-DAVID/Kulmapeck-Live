<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BV48PYmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BV48PYm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BV48PYm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'course' => ['privates', '.errored..service_locator.BV48PYm.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.BV48PYm": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'forumRepository' => ['privates', 'App\\Repository\\ForumRepository', 'getForumRepositoryService', true],
            'lectureRepository' => ['privates', 'App\\Repository\\LectureRepository', 'getLectureRepositoryService', true],
            'membreRepository' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService', true],
            'paymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService', true],
        ], [
            'course' => 'App\\Entity\\Cours',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'entityManagerInterface' => '?',
            'forumRepository' => 'App\\Repository\\ForumRepository',
            'lectureRepository' => 'App\\Repository\\LectureRepository',
            'membreRepository' => 'App\\Repository\\MembreRepository',
            'paymentRepository' => 'App\\Repository\\PaymentRepository',
        ]);
    }
}
