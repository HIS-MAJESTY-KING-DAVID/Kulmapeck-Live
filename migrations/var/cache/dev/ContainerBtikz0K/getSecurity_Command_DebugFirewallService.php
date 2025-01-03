<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.EqDN9r1'] ?? $container->get_ServiceLocator_EqDN9r1Service()), ($container->privates['.service_locator.._yvSZB'] ?? $container->load('get_ServiceLocator__YvSZBService')), ['main' => [0 => ($container->privates['App\\Security\\AppAuthenticator'] ?? $container->load('getAppAuthenticatorService')), 1 => ($container->privates['security.authenticator.remember_me.main'] ?? $container->load('getSecurity_Authenticator_RememberMe_MainService'))], 'login' => [0 => ($container->privates['security.authenticator.json_login.login'] ?? $container->load('getSecurity_Authenticator_JsonLogin_LoginService'))], 'api' => [0 => ($container->privates['security.authenticator.jwt.api'] ?? $container->load('getSecurity_Authenticator_Jwt_ApiService')), 1 => ($container->privates['security.authenticator.refresh_jwt.api'] ?? $container->load('getSecurity_Authenticator_RefreshJwt_ApiService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
