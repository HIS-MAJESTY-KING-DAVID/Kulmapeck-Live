<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RefreshJwt_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.refresh_jwt.api' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authenticator\RefreshTokenAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Security/Http/Authenticator/RefreshTokenAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $b = ($container->privates['lexik_jwt_authentication.handler.authentication_success'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationSuccessService'));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $c = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.authenticator.refresh_jwt.api'])) {
            return $container->privates['security.authenticator.refresh_jwt.api'];
        }
        $d = new \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authentication\AuthenticationSuccessHandler($b, $a);
        $d->setFirewallName('api');

        return $container->privates['security.authenticator.refresh_jwt.api'] = new \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authenticator\RefreshTokenAuthenticator(($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService')), $a, ($container->services['gesdinet.jwtrefreshtoken.request.extractor.chain'] ?? $container->load('getGesdinet_Jwtrefreshtoken_Request_Extractor_ChainService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $d, new \Gesdinet\JWTRefreshTokenBundle\Security\Http\Authentication\AuthenticationFailureHandler($a), ['check_path' => '/api/token/refresh', 'ttl' => 2592000, 'ttl_update' => false, 'token_parameter_name' => 'refresh_token'], $c);
    }
}
