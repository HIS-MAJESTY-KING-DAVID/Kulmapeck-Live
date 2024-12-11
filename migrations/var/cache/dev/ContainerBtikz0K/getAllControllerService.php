<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAllControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Controller\Etablissement\AllController' shared autowired service.
     *
     * @return \App\Controller\Api\Controller\Etablissement\AllController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Controller/Etablissement/AllController.php';

        $container->services['App\\Controller\\Api\\Controller\\Etablissement\\AllController'] = $instance = new \App\Controller\Api\Controller\Etablissement\AllController(($container->privates['App\\Repository\\EtablissementRepository'] ?? $container->load('getEtablissementRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Api\\Controller\\Etablissement\\AllController', $container));

        return $instance;
    }
}