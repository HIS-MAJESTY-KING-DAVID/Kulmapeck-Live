<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvaluationQuestionRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\EvaluationQuestionRepository' shared autowired service.
     *
     * @return \App\Repository\EvaluationQuestionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/EvaluationQuestionRepository.php';

        return $container->privates['App\\Repository\\EvaluationQuestionRepository'] = new \App\Repository\EvaluationQuestionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}