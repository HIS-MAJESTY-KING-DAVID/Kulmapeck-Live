<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Front\ForumController' shared autowired service.
     *
     * @return \App\Controller\Front\ForumController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Front/ForumController.php';

        $container->services['App\\Controller\\Front\\ForumController'] = $instance = new \App\Controller\Front\ForumController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Front\\ForumController', $container));

        return $instance;
    }
}