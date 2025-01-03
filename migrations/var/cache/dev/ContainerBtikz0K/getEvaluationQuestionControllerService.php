<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvaluationQuestionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\EvaluationQuestionController' shared autowired service.
     *
     * @return \App\Controller\Admin\EvaluationQuestionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/EvaluationQuestionController.php';

        $container->services['App\\Controller\\Admin\\EvaluationQuestionController'] = $instance = new \App\Controller\Admin\EvaluationQuestionController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\EvaluationQuestionController', $container));

        return $instance;
    }
}
