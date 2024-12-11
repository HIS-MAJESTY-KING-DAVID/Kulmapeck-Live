<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCoursesController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Instructor\CoursesController' shared autowired service.
     *
     * @return \App\Controller\Instructor\CoursesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Instructor/CoursesController.php';

        $container->services['App\\Controller\\Instructor\\CoursesController'] = $instance = new \App\Controller\Instructor\CoursesController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Instructor\\CoursesController', $container));

        return $instance;
    }
}
