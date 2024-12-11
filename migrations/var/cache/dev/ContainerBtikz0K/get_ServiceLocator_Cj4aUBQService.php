<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cj4aUBQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Cj4aUBQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cj4aUBQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'quizRepository' => 'App\\Repository\\QuizRepository',
        ]);
    }
}
