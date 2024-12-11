<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChapitreRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ChapitreRepository' shared autowired service.
     *
     * @return \App\Repository\ChapitreRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ChapitreRepository.php';

        return $container->privates['App\\Repository\\ChapitreRepository'] = new \App\Repository\ChapitreRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
