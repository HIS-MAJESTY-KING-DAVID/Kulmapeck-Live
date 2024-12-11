<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikeForumMessageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Controller\Course\Forum\LikeForumMessageController' shared autowired service.
     *
     * @return \App\Controller\Api\Controller\Course\Forum\LikeForumMessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Controller/Course/Forum/LikeForumMessageController.php';

        $container->services['App\\Controller\\Api\\Controller\\Course\\Forum\\LikeForumMessageController'] = $instance = new \App\Controller\Api\Controller\Course\Forum\LikeForumMessageController(($container->privates['App\\Repository\\EleveRepository'] ?? $container->load('getEleveRepositoryService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\MembreRepository'] ?? $container->load('getMembreRepositoryService')), ($container->privates['App\\Repository\\LikeMessageForumRepository'] ?? $container->load('getLikeMessageForumRepositoryService')), ($container->privates['App\\Repository\\ForumMessageRepository'] ?? $container->load('getForumMessageRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Api\\Controller\\Course\\Forum\\LikeForumMessageController', $container));

        return $instance;
    }
}
