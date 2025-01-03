<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRevokeRefreshTokenCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Gesdinet\JWTRefreshTokenBundle\Command\RevokeRefreshTokenCommand' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Command\RevokeRefreshTokenCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Command/RevokeRefreshTokenCommand.php';

        $container->privates['Gesdinet\\JWTRefreshTokenBundle\\Command\\RevokeRefreshTokenCommand'] = $instance = new \Gesdinet\JWTRefreshTokenBundle\Command\RevokeRefreshTokenCommand(($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService')));

        $instance->setName('gesdinet:jwt:revoke');
        $instance->setDescription('Revoke a refresh token');

        return $instance;
    }
}
