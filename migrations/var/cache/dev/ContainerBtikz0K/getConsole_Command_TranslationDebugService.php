<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/src/Form/PersonneFormType.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 14 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php'), 15 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php'), 16 => (\dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php'), 17 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/JWTAuthenticator.php'), 18 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/ForwardCompatAuthenticatorTrait.php(14) : eval()\'d code'), 19 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php'), 20 => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/DeserializeListener.php'), 21 => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/OperationRequestInitiatorTrait.php'), 22 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php')], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
