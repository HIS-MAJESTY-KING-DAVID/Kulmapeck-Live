<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageLoadedSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\PageLoadedSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\PageLoadedSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'PageLoadedSubscriber.php';

        return $container->privates['App\\EventSubscriber\\PageLoadedSubscriber'] = new \App\EventSubscriber\PageLoadedSubscriber(($container->privates['App\\Repository\\EvaluationRepository'] ?? $container->getEvaluationRepositoryService()));
    }
}