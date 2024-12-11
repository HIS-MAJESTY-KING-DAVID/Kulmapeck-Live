<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S84XzAKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S84XzAK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S84XzAK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'eqr' => ['privates', 'App\\Repository\\EvaluationQuestionRepository', 'getEvaluationQuestionRepositoryService', true],
            'evaluation' => ['privates', '.errored..service_locator.S84XzAK.App\\Entity\\Evaluation', NULL, 'Cannot autowire service ".service_locator.S84XzAK": it needs an instance of "App\\Entity\\Evaluation" but this type has been excluded in "config/services.yaml".'],
            'evaluationResultatRepository' => ['privates', 'App\\Repository\\EvaluationResultatRepository', 'getEvaluationResultatRepositoryService', false],
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'entityManager' => '?',
            'eqr' => 'App\\Repository\\EvaluationQuestionRepository',
            'evaluation' => 'App\\Entity\\Evaluation',
            'evaluationResultatRepository' => 'App\\Repository\\EvaluationResultatRepository',
            'quizRepository' => 'App\\Repository\\QuizRepository',
        ]);
    }
}