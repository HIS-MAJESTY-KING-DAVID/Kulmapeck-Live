<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\Admin\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/RegistrationController.php';

        $container->services['App\\Controller\\Admin\\RegistrationController'] = $instance = new \App\Controller\Admin\RegistrationController(($container->privates['App\\Security\\EmailVerifier'] ?? $container->load('getEmailVerifierService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\RegistrationController', $container));

        return $instance;
    }
}
