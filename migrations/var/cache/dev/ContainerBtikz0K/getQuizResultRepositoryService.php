<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuizResultRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\QuizResultRepository' shared autowired service.
     *
     * @return \App\Repository\QuizResultRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/QuizResultRepository.php';

        return $container->privates['App\\Repository\\QuizResultRepository'] = new \App\Repository\QuizResultRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
