<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6atRNmGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6atRNmG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6atRNmG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'examRepository' => ['privates', 'App\\Repository\\ExamRepository', 'getExamRepositoryService', true],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
        ], [
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'examRepository' => 'App\\Repository\\ExamRepository',
            'fileUploader' => 'App\\Service\\FileUploader',
        ]);
    }
}
