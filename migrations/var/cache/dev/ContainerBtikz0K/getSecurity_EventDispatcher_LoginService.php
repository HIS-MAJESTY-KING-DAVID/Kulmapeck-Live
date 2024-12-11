<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_EventDispatcher_LoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.event_dispatcher.login' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.event_dispatcher.login'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => #[\Closure(name: 'security.listener.login.user_provider', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserProviderListener')] function () use ($container) {
            return ($container->privates['security.listener.login.user_provider'] ?? $container->load('getSecurity_Listener_Login_UserProviderService'));
        }, 1 => 'checkPassport'], 2048);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => #[\Closure(name: 'security.listener.user_checker.login', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserCheckerListener')] function () use ($container) {
            return ($container->privates['security.listener.user_checker.login'] ?? $container->load('getSecurity_Listener_UserChecker_LoginService'));
        }, 1 => 'preCheckCredentials'], 256);
        $instance->addListener('security.authentication.success', [0 => #[\Closure(name: 'security.listener.user_checker.login', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserCheckerListener')] function () use ($container) {
            return ($container->privates['security.listener.user_checker.login'] ?? $container->load('getSecurity_Listener_UserChecker_LoginService'));
        }, 1 => 'postCheckCredentials'], 256);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => #[\Closure(name: 'security.listener.user_provider', class: 'Symfony\\Component\\Security\\Http\\EventListener\\UserProviderListener')] function () use ($container) {
            return ($container->privates['security.listener.user_provider'] ?? $container->load('getSecurity_Listener_UserProviderService'));
        }, 1 => 'checkPassport'], 1024);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => #[\Closure(name: 'Gesdinet\\JWTRefreshTokenBundle\\EventListener\\LogoutEventListener')] function () use ($container) {
            return ($container->privates['Gesdinet\\JWTRefreshTokenBundle\\EventListener\\LogoutEventListener'] ?? $container->load('getLogoutEventListenerService'));
        }, 1 => 'onLogout'], 0);
        $instance->addListener('security.interactive_login', [0 => #[\Closure(name: 'App\\EventSubscriber\\LoginSubscriber')] function () use ($container) {
            return ($container->privates['App\\EventSubscriber\\LoginSubscriber'] ?? $container->load('getLoginSubscriberService'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => #[\Closure(name: 'App\\EventSubscriber\\LogoutSubscriber')] function () use ($container) {
            return ($container->privates['App\\EventSubscriber\\LogoutSubscriber'] ??= new \App\EventSubscriber\LogoutSubscriber());
        }, 1 => 'onLogoutEvent'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => #[\Closure(name: 'security.listener.check_authenticator_credentials', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CheckCredentialsListener')] function () use ($container) {
            return ($container->privates['security.listener.check_authenticator_credentials'] ?? $container->load('getSecurity_Listener_CheckAuthenticatorCredentialsService'));
        }, 1 => 'checkPassport'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LoginSuccessEvent', [0 => #[\Closure(name: 'security.listener.password_migrating', class: 'Symfony\\Component\\Security\\Http\\EventListener\\PasswordMigratingListener')] function () use ($container) {
            return ($container->privates['security.listener.password_migrating'] ?? $container->load('getSecurity_Listener_PasswordMigratingService'));
        }, 1 => 'onLoginSuccess'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\CheckPassportEvent', [0 => #[\Closure(name: 'security.listener.csrf_protection', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CsrfProtectionListener')] function () use ($container) {
            return ($container->privates['security.listener.csrf_protection'] ?? $container->load('getSecurity_Listener_CsrfProtectionService'));
        }, 1 => 'checkPassport'], 512);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => #[\Closure(name: 'security.logout.listener.csrf_token_clearing', class: 'Symfony\\Component\\Security\\Http\\EventListener\\CsrfTokenClearingLogoutListener')] function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $instance;
    }
}
