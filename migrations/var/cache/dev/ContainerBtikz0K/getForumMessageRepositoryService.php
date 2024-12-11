<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumMessageRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ForumMessageRepository' shared autowired service.
     *
     * @return \App\Repository\ForumMessageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ForumMessageRepository.php';

        return $container->privates['App\\Repository\\ForumMessageRepository'] = new \App\Repository\ForumMessageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
