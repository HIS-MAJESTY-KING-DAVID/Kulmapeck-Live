<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLectureRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\LectureRepository' shared autowired service.
     *
     * @return \App\Repository\LectureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/LectureRepository.php';

        return $container->privates['App\\Repository\\LectureRepository'] = new \App\Repository\LectureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
