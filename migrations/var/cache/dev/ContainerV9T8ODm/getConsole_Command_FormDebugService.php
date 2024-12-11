<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => '', 4 => 'Vich\\UploaderBundle\\Form\\Type', 5 => 'FOS\\CKEditorBundle\\Form\\Type'], [0 => 'App\\Form\\AbonnementItemType', 1 => 'App\\Form\\AbonnementType', 2 => 'App\\Form\\CategorieType', 3 => 'App\\Form\\ChangePasswordFormType', 4 => 'App\\Form\\ChapitreType', 5 => 'App\\Form\\ClasseType', 6 => 'App\\Form\\ContactType', 7 => 'App\\Form\\CoursType', 8 => 'App\\Form\\CourseQuizType', 9 => 'App\\Form\\CourseReviewType', 10 => 'App\\Form\\EditSocialSettingType', 11 => 'App\\Form\\EleveType', 12 => 'App\\Form\\EnseignantType', 13 => 'App\\Form\\EtablissementType', 14 => 'App\\Form\\EvaluationQuestionType', 15 => 'App\\Form\\EvaluationType', 16 => 'App\\Form\\ExamFormType', 17 => 'App\\Form\\FAQType', 18 => 'App\\Form\\FiliereType', 19 => 'App\\Form\\FormationType', 20 => 'App\\Form\\ForumMessageType', 21 => 'App\\Form\\ForumType', 22 => 'App\\Form\\GeneralSettingsType', 23 => 'App\\Form\\Lesson1Type', 24 => 'App\\Form\\LessonFormType', 25 => 'App\\Form\\LessonType', 26 => 'App\\Form\\MediaType', 27 => 'App\\Form\\NetworkConfigType', 28 => 'App\\Form\\NotificationTemplateType', 29 => 'App\\Form\\PaysType', 30 => 'App\\Form\\PersonneFormType', 31 => 'App\\Form\\PersonneType', 32 => 'App\\Form\\PropositionType', 33 => 'App\\Form\\QuizType', 34 => 'App\\Form\\RegistrationFormType', 35 => 'App\\Form\\RegistrationStudentType', 36 => 'App\\Form\\RegistrationTeacherType', 37 => 'App\\Form\\ResetPasswordRequestFormType', 38 => 'App\\Form\\ResetPasswordType', 39 => 'App\\Form\\RetraitType', 40 => 'App\\Form\\SocialSettingsType', 41 => 'App\\Form\\SousSystemeType', 42 => 'App\\Form\\SpecialiteType', 43 => 'App\\Form\\SujetType', 44 => 'App\\Form\\TermType', 45 => 'App\\Form\\TypeEnseignementType', 46 => 'App\\Form\\WebSiteSettingsType', 47 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 48 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 49 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 50 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 51 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 52 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 53 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 54 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 55 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 9 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
