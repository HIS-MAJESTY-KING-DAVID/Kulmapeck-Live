<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTermRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\TermRepository' shared autowired service.
     *
     * @return \App\Repository\TermRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TermRepository.php';

        return $container->privates['App\\Repository\\TermRepository'] = new \App\Repository\TermRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
