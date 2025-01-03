<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnseignantRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\EnseignantRepository' shared autowired service.
     *
     * @return \App\Repository\EnseignantRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'EnseignantRepository.php';

        return $container->privates['App\\Repository\\EnseignantRepository'] = new \App\Repository\EnseignantRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
