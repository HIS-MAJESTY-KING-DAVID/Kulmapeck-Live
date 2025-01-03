<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCourseTagRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CourseTagRepository' shared autowired service.
     *
     * @return \App\Repository\CourseTagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/CourseTagRepository.php';

        return $container->privates['App\\Repository\\CourseTagRepository'] = new \App\Repository\CourseTagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
