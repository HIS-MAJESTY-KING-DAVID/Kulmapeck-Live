<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStartCourseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Controller\Course\StartCourseController' shared autowired service.
     *
     * @return \App\Controller\Api\Controller\Course\StartCourseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Controller/Course/StartCourseController.php';

        $container->services['App\\Controller\\Api\\Controller\\Course\\StartCourseController'] = $instance = new \App\Controller\Api\Controller\Course\StartCourseController(($container->privates['App\\Repository\\EleveRepository'] ?? $container->load('getEleveRepositoryService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\PaymentRepository'] ?? $container->load('getPaymentRepositoryService')), ($container->privates['App\\Repository\\MembreRepository'] ?? $container->load('getMembreRepositoryService')), ($container->privates['App\\Repository\\ForumRepository'] ?? $container->load('getForumRepositoryService')), ($container->privates['App\\Repository\\LectureRepository'] ?? $container->load('getLectureRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Api\\Controller\\Course\\StartCourseController', $container));

        return $instance;
    }
}
