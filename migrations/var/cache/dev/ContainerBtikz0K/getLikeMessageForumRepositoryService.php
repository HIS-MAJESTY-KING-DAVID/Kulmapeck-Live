<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikeMessageForumRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\LikeMessageForumRepository' shared autowired service.
     *
     * @return \App\Repository\LikeMessageForumRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/LikeMessageForumRepository.php';

        return $container->privates['App\\Repository\\LikeMessageForumRepository'] = new \App\Repository\LikeMessageForumRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}