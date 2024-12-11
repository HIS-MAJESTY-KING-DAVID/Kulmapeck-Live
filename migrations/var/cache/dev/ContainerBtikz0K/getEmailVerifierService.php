<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailVerifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\EmailVerifier' shared autowired service.
     *
     * @return \App\Security\EmailVerifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Security/EmailVerifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/UriSigner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Util/VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Generator/VerifyEmailTokenGenerator.php';

        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['App\\Security\\EmailVerifier'])) {
            return $container->privates['App\\Security\\EmailVerifier'];
        }
        $b = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Security\\EmailVerifier'])) {
            return $container->privates['App\\Security\\EmailVerifier'];
        }
        $c = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Security\\EmailVerifier'])) {
            return $container->privates['App\\Security\\EmailVerifier'];
        }

        return $container->privates['App\\Security\\EmailVerifier'] = new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper($a, new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET'), 'signature'), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), $b, $c);
    }
}
