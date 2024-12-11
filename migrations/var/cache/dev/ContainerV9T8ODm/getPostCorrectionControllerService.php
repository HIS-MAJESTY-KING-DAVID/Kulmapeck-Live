<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostCorrectionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Controller\Evaluation\PostCorrectionController' shared autowired service.
     *
     * @return \App\Controller\Api\Controller\Evaluation\PostCorrectionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Evaluation'.\DIRECTORY_SEPARATOR.'PostCorrectionController.php';

        $container->services['App\\Controller\\Api\\Controller\\Evaluation\\PostCorrectionController'] = $instance = new \App\Controller\Api\Controller\Evaluation\PostCorrectionController(($container->privates['App\\Repository\\QuizRepository'] ?? $container->load('getQuizRepositoryService')), ($container->privates['App\\Repository\\EvaluationQuestionRepository'] ?? $container->load('getEvaluationQuestionRepositoryService')), ($container->privates['App\\Repository\\EvaluationResultatRepository'] ?? $container->getEvaluationResultatRepositoryService()), ($container->privates['App\\Repository\\EleveRepository'] ?? $container->load('getEleveRepositoryService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Api\\Controller\\Evaluation\\PostCorrectionController', $container));

        return $instance;
    }
}
