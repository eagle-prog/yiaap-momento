<?php

namespace ContainerQ2HDr8s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app' => 'getCache_AppService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'fos_comment.acl.comment' => 'getFosComment_Acl_CommentService',
            'fos_comment.acl.thread' => 'getFosComment_Acl_ThreadService',
            'fos_comment.acl.vote' => 'getFosComment_Acl_VoteService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
        ];
        $this->fileMap = [
            'App\\Controller\\Api\\CountryController' => 'getCountryControllerService.php',
            'App\\Controller\\Api\\EventController' => 'getEventControllerService.php',
            'App\\Controller\\Api\\EventDateController' => 'getEventDateControllerService.php',
            'App\\Controller\\Api\\EventTicketController' => 'getEventTicketControllerService.php',
            'App\\Controller\\Api\\ScannerController' => 'getScannerControllerService.php',
            'App\\Controller\\Api\\UserController' => 'getUserControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\AmenityController' => 'getAmenityControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\AudienceController' => 'getAudienceControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController' => 'getBlogPostCategoryControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\BlogPostController' => 'getBlogPostControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\CategoryController' => 'getCategoryControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\ConsoleController' => 'getConsoleControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\CountryController' => 'getCountryController2Service.php',
            'App\\Controller\\Dashboard\\Administrator\\CurrencyController' => 'getCurrencyControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController' => 'getHelpCenterArticleControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController' => 'getHelpCenterCategoryControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\LanguageController' => 'getLanguageControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\MainController' => 'getMainControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\PageController' => 'getPageControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\SettingsController' => 'getSettingsControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\TranslationController' => 'getTranslationControllerService.php',
            'App\\Controller\\Dashboard\\Administrator\\UserController' => 'getUserController2Service.php',
            'App\\Controller\\Dashboard\\Administrator\\VenueTypeController' => 'getVenueTypeControllerService.php',
            'App\\Controller\\Dashboard\\Attendee\\FavoritesController' => 'getFavoritesControllerService.php',
            'App\\Controller\\Dashboard\\Attendee\\FollowingController' => 'getFollowingControllerService.php',
            'App\\Controller\\Dashboard\\Attendee\\MainController' => 'getMainController2Service.php',
            'App\\Controller\\Dashboard\\Main\\MainController' => 'getMainController3Service.php',
            'App\\Controller\\Dashboard\\Organizer\\AccountController' => 'getAccountControllerService.php',
            'App\\Controller\\Dashboard\\Organizer\\MainController' => 'getMainController4Service.php',
            'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController' => 'getPointOfSaleControllerService.php',
            'App\\Controller\\Dashboard\\Organizer\\ScannerController' => 'getScannerController2Service.php',
            'App\\Controller\\Dashboard\\Organizer\\SettingsController' => 'getSettingsController2Service.php',
            'App\\Controller\\Dashboard\\PointOfSale\\MainController' => 'getMainController5Service.php',
            'App\\Controller\\Dashboard\\Scanner\\AttendeesCheckInController' => 'getAttendeesCheckInControllerService.php',
            'App\\Controller\\Dashboard\\Scanner\\MainController' => 'getMainController6Service.php',
            'App\\Controller\\Dashboard\\Shared\\AccountController' => 'getAccountController2Service.php',
            'App\\Controller\\Dashboard\\Shared\\CartController' => 'getCartControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\EventController' => 'getEventController2Service.php',
            'App\\Controller\\Dashboard\\Shared\\OrderController' => 'getOrderControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\PayoutRequestController' => 'getPayoutRequestControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\ReportsController' => 'getReportsControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\ReviewController' => 'getReviewControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\StatisticsController' => 'getStatisticsControllerService.php',
            'App\\Controller\\Dashboard\\Shared\\VenueController' => 'getVenueControllerService.php',
            'App\\Controller\\Front\\BlogController' => 'getBlogControllerService.php',
            'App\\Controller\\Front\\EventController' => 'getEventController3Service.php',
            'App\\Controller\\Front\\HelpCenterController' => 'getHelpCenterControllerService.php',
            'App\\Controller\\Front\\MainController' => 'getMainController7Service.php',
            'App\\Controller\\Front\\NewsletterController' => 'getNewsletterControllerService.php',
            'App\\Controller\\Front\\OrganizerController' => 'getOrganizerControllerService.php',
            'App\\Controller\\Front\\PageController' => 'getPageController2Service.php',
            'App\\Controller\\Front\\ReviewController' => 'getReviewController2Service.php',
            'App\\Controller\\Front\\VenueController' => 'getVenueController2Service.php',
            'App\\Controller\\Installer\\InstallerController' => 'getInstallerControllerService.php',
            'App\\Controller\\bundles\\FOSUserBundle\\ChangePasswordController' => 'getChangePasswordControllerService.php',
            'App\\Controller\\bundles\\FOSUserBundle\\RegistrationController' => 'getRegistrationControllerService.php',
            'App\\Controller\\bundles\\FOSUserBundle\\ResettingController' => 'getResettingControllerService.php',
            'App\\Controller\\bundles\\FOSUserBundle\\SecurityController' => 'getSecurityControllerService.php',
            'Debril\\RssAtomBundle\\Controller\\StreamController' => 'getStreamControllerService.php',
            'JMS\\TranslationBundle\\Controller\\ApiController' => 'getApiControllerService.php',
            'JMS\\TranslationBundle\\Controller\\TranslateController' => 'getTranslateControllerService.php',
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService.php',
            'bazinga.jstranslation.dump_command' => 'getBazinga_Jstranslation_DumpCommandService.php',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService.php',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'coresphere_console.controller' => 'getCoresphereConsole_ControllerService.php',
            'error_controller' => 'getErrorControllerService.php',
            'ewz_recaptcha.form.type' => 'getEwzRecaptcha_Form_TypeService.php',
            'ewz_recaptcha.validator.true' => 'getEwzRecaptcha_Validator_TrueService.php',
            'feedio' => 'getFeedioService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_comment.form_factory.comment' => 'getFosComment_FormFactory_CommentService.php',
            'fos_comment.form_factory.commentable_thread' => 'getFosComment_FormFactory_CommentableThreadService.php',
            'fos_comment.form_factory.delete_comment' => 'getFosComment_FormFactory_DeleteCommentService.php',
            'fos_comment.form_factory.thread' => 'getFosComment_FormFactory_ThreadService.php',
            'fos_comment.form_factory.vote' => 'getFosComment_FormFactory_VoteService.php',
            'fos_comment.manager.comment' => 'getFosComment_Manager_CommentService.php',
            'fos_comment.manager.thread' => 'getFosComment_Manager_ThreadService.php',
            'fos_comment.manager.vote' => 'getFosComment_Manager_VoteService.php',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService.php',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService.php',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'httplug.client' => 'getHttplug_ClientService.php',
            'httplug.message_factory' => 'getHttplug_MessageFactoryService.php',
            'httplug.stream_factory' => 'getHttplug_StreamFactoryService.php',
            'httplug.uri_factory' => 'getHttplug_UriFactoryService.php',
            'hwi_oauth.account.connector' => 'getHwiOauth_Account_ConnectorService.php',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService.php',
            'hwi_oauth.registration.form.factory' => 'getHwiOauth_Registration_Form_FactoryService.php',
            'hwi_oauth.registration.form.handler' => 'getHwiOauth_Registration_Form_HandlerService.php',
            'hwi_oauth.resource_owner.facebook' => 'getHwiOauth_ResourceOwner_FacebookService.php',
            'hwi_oauth.resource_owner.google' => 'getHwiOauth_ResourceOwner_GoogleService.php',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService.php',
            'jms_translation.controller.api_controller' => 'getJmsTranslation_Controller_ApiControllerService.php',
            'jms_translation.controller.translate_controller' => 'getJmsTranslation_Controller_TranslateControllerService.php',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService.php',
            'knp_paginator' => 'getKnpPaginatorService.php',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService.php',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService.php',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService.php',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService.php',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService.php',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService.php',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService.php',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService.php',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService.php',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService.php',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService.php',
            'payum' => 'getPayumService.php',
            'payum.action.get_http_request' => 'getPayum_Action_GetHttpRequestService.php',
            'payum.action.obtain_credit_card_builder' => 'getPayum_Action_ObtainCreditCardBuilderService.php',
            'payum.builder' => 'getPayum_BuilderService.php',
            'payum.converter.reply_to_http_response' => 'getPayum_Converter_ReplyToHttpResponseService.php',
            'payum.dynamic_gateways.config_storage' => 'getPayum_DynamicGateways_ConfigStorageService.php',
            'payum.dynamic_registry' => 'getPayum_DynamicRegistryService.php',
            'payum.extension.logger' => 'getPayum_Extension_LoggerService.php',
            'payum.extension.storage.app_entity_payment' => 'getPayum_Extension_Storage_AppEntityPaymentService.php',
            'payum.form.extension.gateway_factories_choice' => 'getPayum_Form_Extension_GatewayFactoriesChoiceService.php',
            'payum.form.type.credit_card' => 'getPayum_Form_Type_CreditCardService.php',
            'payum.form.type.credit_card_expiration_date' => 'getPayum_Form_Type_CreditCardExpirationDateService.php',
            'payum.form.type.gateway_config' => 'getPayum_Form_Type_GatewayConfigService.php',
            'payum.form.type.gateway_factories_choice' => 'getPayum_Form_Type_GatewayFactoriesChoiceService.php',
            'payum.listener.reply_to_http_response' => 'getPayum_Listener_ReplyToHttpResponseService.php',
            'payum.security.token_storage' => 'getPayum_Security_TokenStorageService.php',
            'payum.static_registry' => 'getPayum_StaticRegistryService.php',
            'payum.storage.app_entity_payment' => 'getPayum_Storage_AppEntityPaymentService.php',
            'payum.storage.app_entity_paymentgateway' => 'getPayum_Storage_AppEntityPaymentgatewayService.php',
            'payum.storage.app_entity_paymenttoken' => 'getPayum_Storage_AppEntityPaymenttokenService.php',
            'presta_sitemap.controller' => 'getPrestaSitemap_ControllerService.php',
            'presta_sitemap.dump_command' => 'getPrestaSitemap_DumpCommandService.php',
            'presta_sitemap.dumper' => 'getPrestaSitemap_DumperService.php',
            'presta_sitemap.generator' => 'getPrestaSitemap_GeneratorService.php',
            'pugx_autocompleter.autocomplete' => 'getPugxAutocompleter_AutocompleteService.php',
            'pugx_autocompleter.filter.doctrine_subscriber' => 'getPugxAutocompleter_Filter_DoctrineSubscriberService.php',
            'pugx_autocompleter.filter_autocomplete' => 'getPugxAutocompleter_FilterAutocompleteService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator' => 'getValidatorService.php',
            'vich_uploader.directory_namer_subdir' => 'getVichUploader_DirectoryNamerSubdirService.php',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService.php',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService.php',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService.php',
            'vich_uploader.namer_base64' => 'getVichUploader_NamerBase64Service.php',
            'vich_uploader.namer_directory_current_date_time' => 'getVichUploader_NamerDirectoryCurrentDateTimeService.php',
            'vich_uploader.namer_directory_property' => 'getVichUploader_NamerDirectoryPropertyService.php',
            'vich_uploader.namer_hash' => 'getVichUploader_NamerHashService.php',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService.php',
            'vich_uploader.namer_property' => 'getVichUploader_NamerPropertyService.php',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService.php',
            'vich_uploader.namer_uniqid.app_layout' => 'getVichUploader_NamerUniqid_AppLayoutService.php',
            'vich_uploader.namer_uniqid.audience_image' => 'getVichUploader_NamerUniqid_AudienceImageService.php',
            'vich_uploader.namer_uniqid.blog_post_image' => 'getVichUploader_NamerUniqid_BlogPostImageService.php',
            'vich_uploader.namer_uniqid.category_image' => 'getVichUploader_NamerUniqid_CategoryImageService.php',
            'vich_uploader.namer_uniqid.event_image' => 'getVichUploader_NamerUniqid_EventImageService.php',
            'vich_uploader.namer_uniqid.homepage_hero_custom_background' => 'getVichUploader_NamerUniqid_HomepageHeroCustomBackgroundService.php',
            'vich_uploader.namer_uniqid.organizer_cover' => 'getVichUploader_NamerUniqid_OrganizerCoverService.php',
            'vich_uploader.namer_uniqid.organizer_logo' => 'getVichUploader_NamerUniqid_OrganizerLogoService.php',
            'vich_uploader.namer_uniqid.payment_gateway' => 'getVichUploader_NamerUniqid_PaymentGatewayService.php',
            'vich_uploader.namer_uniqid.user_avatar' => 'getVichUploader_NamerUniqid_UserAvatarService.php',
            'vich_uploader.namer_uniqid.venue_image' => 'getVichUploader_NamerUniqid_VenueImageService.php',
            'welp_mailchimp.list_provider' => 'getWelpMailchimp_ListProviderService.php',
            'welp_mailchimp.list_repository' => 'getWelpMailchimp_ListRepositoryService.php',
            'welp_mailchimp.list_synchronizer' => 'getWelpMailchimp_ListSynchronizerService.php',
            'welp_mailchimp.mailchimp_master' => 'getWelpMailchimp_MailchimpMasterService.php',
            'welp_mailchimp.provider.factory' => 'getWelpMailchimp_Provider_FactoryService.php',
        ];
        $this->aliases = [
            'FeedIo\\FeedIo' => 'feedio',
            'Payum\\Core\\Payum' => 'payum',
            'Presta\\SitemapBundle\\Controller\\SitemapController' => 'presta_sitemap.controller',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'hwi_oauth.http.client' => 'httplug.client',
            'hwi_oauth.http.message_factory' => 'httplug.message_factory',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'mailer' => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/src/EventSubscriber/MaintenanceModeSubscriber.php';
            include_once \dirname(__DIR__, 4).'/src/EventSubscriber/WebsiteConfiguredSubscriber.php';
            include_once \dirname(__DIR__, 4).'/src/Service/AppServices.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/EventListener/Doctrine/CleanListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sluggable/SluggableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/ORM/AbstractSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/ORM/Translatable/TranslatableSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Reflection/ClassAnalyzer.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/ORM/Translatable/CurrentLocaleCallable.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/ORM/Translatable/DefaultLocaleCallable.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/SoftDeleteable/SoftDeleteableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/AbstractTrackingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/EventListener/Doctrine/UploadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/UserListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Http/ResourceOwnerMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Http/ResourceOwnerMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 4).'/src/Twig/AppExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Intl.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Twig/EntryFilesTwigExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Twig/Extension/PaginationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Helper/Processor.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Twig/Extension/UploaderExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Templating/FilterExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Twig/Extension/OAuthExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/HelperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/Helper.php';
            include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Templating/Helper/OAuthHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Twig/Extension/TimeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Templating/Helper/TimeHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/DateTimeFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Twig/SerializerRuntimeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Twig/CommentExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/yellowskies/qr-code-bundle/Twig/Extensions/Barcode.php';
            include_once \dirname(__DIR__, 4).'/vendor/yellowskies/qr-code-bundle/Generator/Generator.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Twig/GoogleChartsExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/ChartOutputInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/AbstractChartOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/Javascript/ChartOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/OptionsOutputInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/AbstractOptionsOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/Javascript/OptionsOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/DateOutputInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/Javascript/DateOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/DataOutputInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/Javascript/DataOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/EventsOutputInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/Output/Javascript/EventsOutput.php';
            include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/Twig/HTMLPurifierExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/Twig/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Subscriber/SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Storage/StorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Storage/AbstractStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Storage/FileSystemStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Metadata/MetadataReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/MetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/AdvancedDriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/DriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/AbstractFileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Metadata/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/FileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/AdvancedFileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Metadata/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Metadata/Driver/YamlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Cache/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Cache/FileCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Mapping/PropertyMappingFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Handler/UploadHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Injector/FileInjectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Injector/FileInjector.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Templating/Helper/UploaderHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/WebPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/CacheManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/FilterConfiguration.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/NoCacheWebPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdaterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdater.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/Strategy/DiscoveryStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-http/httplug-bundle/src/Discovery/ConfiguredClientsStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-http/httplug/src/HttpClient.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/ClassDiscovery.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/HttpClientDiscovery.php';
            include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/OAuthUtils.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/ThreadAclInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/RoleThreadAcl.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/CommentAclInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/RoleCommentAcl.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/VoteAclInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/RoleVoteAcl.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('JWBbV6BDqS', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $b = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
        $c = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
        $d = ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService());
        $e = new \Gedmo\Sluggable\SluggableListener();

        $f = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $e->setAnnotationReader($f);
        $e->setTransliterator([0 => 'App\\Service\\Slugger', 1 => 'transliterate']);
        $e->setUrlizer([0 => 'App\\Service\\Slugger', 1 => 'urlize']);
        $g = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $g->setAnnotationReader($f);
        $h = new \Gedmo\Timestampable\TimestampableListener();
        $h->setAnnotationReader($f);

        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('category_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('event_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('audience_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('venue_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('organizer_logo', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('organizer_cover', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('blog_post_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('homepage_hero_custom_background', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('user_avatar', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('payment_gateway', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('app_layout', $b, $c, $d));
        $a->addEventSubscriber($e);
        $a->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Translatable\TranslatableSubscriber(new \Knp\DoctrineBehaviors\Reflection\ClassAnalyzer(), new \Knp\DoctrineBehaviors\ORM\Translatable\CurrentLocaleCallable($this), new \Knp\DoctrineBehaviors\ORM\Translatable\DefaultLocaleCallable($this->getEnv('DEFAULT_LOCALE')), 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable', 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation', 'LAZY', 'LAZY'));
        $a->addEventSubscriber($g);
        $a->addEventSubscriber($h);
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('category_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('category_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('event_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('event_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('audience_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('audience_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('venue_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('venue_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('organizer_logo', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('organizer_logo', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('organizer_cover', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('organizer_cover', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('blog_post_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('blog_post_image', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('homepage_hero_custom_background', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('homepage_hero_custom_background', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('user_avatar', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('user_avatar', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('payment_gateway', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('payment_gateway', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('app_layout', $b, $c, $d));
        $a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('app_layout', $b, $c, $d));
        $a->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService())));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8', 'collate' => 'utf8_unicode_ci']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Doctrine/Resources/mapping') => 'Payum\\Core\\Model', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/config/doctrine') => 'FOS\\CommentBundle\\Entity']);
        $d->setGlobalBasename('mapping');
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Entity')]);

        $c->addDriver($d, 'Payum\\Core\\Model');
        $c->addDriver($d, 'FOS\\CommentBundle\\Entity');
        $c->addDriver($e, 'App\\Entity');
        $c->addDriver($e, 'Vich\\UploaderBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['payum' => 'Payum\\Core\\Model', 'App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity', 'FOSCommentBundle' => 'FOS\\CommentBundle\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AmenityRepository' => ['privates', 'App\\Repository\\AmenityRepository', 'getAmenityRepositoryService.php', true],
            'App\\Repository\\AmenityTranslationRepository' => ['privates', 'App\\Repository\\AmenityTranslationRepository', 'getAmenityTranslationRepositoryService.php', true],
            'App\\Repository\\AppLayoutSettingsRepository' => ['privates', 'App\\Repository\\AppLayoutSettingsRepository', 'getAppLayoutSettingsRepositoryService.php', true],
            'App\\Repository\\AudienceRepository' => ['privates', 'App\\Repository\\AudienceRepository', 'getAudienceRepositoryService.php', true],
            'App\\Repository\\AudienceTranslationRepository' => ['privates', 'App\\Repository\\AudienceTranslationRepository', 'getAudienceTranslationRepositoryService.php', true],
            'App\\Repository\\BlogPostCategoryRepository' => ['privates', 'App\\Repository\\BlogPostCategoryRepository', 'getBlogPostCategoryRepositoryService.php', true],
            'App\\Repository\\BlogPostCategoryTranslationRepository' => ['privates', 'App\\Repository\\BlogPostCategoryTranslationRepository', 'getBlogPostCategoryTranslationRepositoryService.php', true],
            'App\\Repository\\BlogPostRepository' => ['privates', 'App\\Repository\\BlogPostRepository', 'getBlogPostRepositoryService.php', true],
            'App\\Repository\\BlogPostTranslationRepository' => ['privates', 'App\\Repository\\BlogPostTranslationRepository', 'getBlogPostTranslationRepositoryService.php', true],
            'App\\Repository\\CartElementRepository' => ['privates', 'App\\Repository\\CartElementRepository', 'getCartElementRepositoryService.php', true],
            'App\\Repository\\CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
            'App\\Repository\\CategoryTranslationRepository' => ['privates', 'App\\Repository\\CategoryTranslationRepository', 'getCategoryTranslationRepositoryService.php', true],
            'App\\Repository\\CommentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService.php', true],
            'App\\Repository\\CountryRepository' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService.php', true],
            'App\\Repository\\CountryTranslationRepository' => ['privates', 'App\\Repository\\CountryTranslationRepository', 'getCountryTranslationRepositoryService.php', true],
            'App\\Repository\\CurrencyRepository' => ['privates', 'App\\Repository\\CurrencyRepository', 'getCurrencyRepositoryService.php', true],
            'App\\Repository\\EventDateRepository' => ['privates', 'App\\Repository\\EventDateRepository', 'getEventDateRepositoryService.php', true],
            'App\\Repository\\EventImageRepository' => ['privates', 'App\\Repository\\EventImageRepository', 'getEventImageRepositoryService.php', true],
            'App\\Repository\\EventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService.php', true],
            'App\\Repository\\EventTicketRepository' => ['privates', 'App\\Repository\\EventTicketRepository', 'getEventTicketRepositoryService.php', true],
            'App\\Repository\\EventTranslationRepository' => ['privates', 'App\\Repository\\EventTranslationRepository', 'getEventTranslationRepositoryService.php', true],
            'App\\Repository\\HelpCenterArticleRepository' => ['privates', 'App\\Repository\\HelpCenterArticleRepository', 'getHelpCenterArticleRepositoryService.php', true],
            'App\\Repository\\HelpCenterArticleTranslationRepository' => ['privates', 'App\\Repository\\HelpCenterArticleTranslationRepository', 'getHelpCenterArticleTranslationRepositoryService.php', true],
            'App\\Repository\\HelpCenterCategoryRepository' => ['privates', 'App\\Repository\\HelpCenterCategoryRepository', 'getHelpCenterCategoryRepositoryService.php', true],
            'App\\Repository\\HelpCenterCategoryTranslationRepository' => ['privates', 'App\\Repository\\HelpCenterCategoryTranslationRepository', 'getHelpCenterCategoryTranslationRepositoryService.php', true],
            'App\\Repository\\HomepageHeroSettingsRepository' => ['privates', 'App\\Repository\\HomepageHeroSettingsRepository', 'getHomepageHeroSettingsRepositoryService.php', true],
            'App\\Repository\\HomepageHeroSettingsTranslationRepository' => ['privates', 'App\\Repository\\HomepageHeroSettingsTranslationRepository', 'getHomepageHeroSettingsTranslationRepositoryService.php', true],
            'App\\Repository\\LanguageRepository' => ['privates', 'App\\Repository\\LanguageRepository', 'getLanguageRepositoryService.php', true],
            'App\\Repository\\LanguageTranslationRepository' => ['privates', 'App\\Repository\\LanguageTranslationRepository', 'getLanguageTranslationRepositoryService.php', true],
            'App\\Repository\\MenuElementRepository' => ['privates', 'App\\Repository\\MenuElementRepository', 'getMenuElementRepositoryService.php', true],
            'App\\Repository\\MenuElementTranslationRepository' => ['privates', 'App\\Repository\\MenuElementTranslationRepository', 'getMenuElementTranslationRepositoryService.php', true],
            'App\\Repository\\MenuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService.php', true],
            'App\\Repository\\MenuTranslationRepository' => ['privates', 'App\\Repository\\MenuTranslationRepository', 'getMenuTranslationRepositoryService.php', true],
            'App\\Repository\\OrderElementRepository' => ['privates', 'App\\Repository\\OrderElementRepository', 'getOrderElementRepositoryService.php', true],
            'App\\Repository\\OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService.php', true],
            'App\\Repository\\OrderTicketRepository' => ['privates', 'App\\Repository\\OrderTicketRepository', 'getOrderTicketRepositoryService.php', true],
            'App\\Repository\\OrganizerRepository' => ['privates', 'App\\Repository\\OrganizerRepository', 'getOrganizerRepositoryService.php', true],
            'App\\Repository\\PageRepository' => ['privates', 'App\\Repository\\PageRepository', 'getPageRepositoryService.php', true],
            'App\\Repository\\PageTranslationRepository' => ['privates', 'App\\Repository\\PageTranslationRepository', 'getPageTranslationRepositoryService.php', true],
            'App\\Repository\\PaymentGatewayRepository' => ['privates', 'App\\Repository\\PaymentGatewayRepository', 'getPaymentGatewayRepositoryService.php', true],
            'App\\Repository\\PaymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService.php', true],
            'App\\Repository\\PaymentTokenRepository' => ['privates', 'App\\Repository\\PaymentTokenRepository', 'getPaymentTokenRepositoryService.php', true],
            'App\\Repository\\PayoutRequestRepository' => ['privates', 'App\\Repository\\PayoutRequestRepository', 'getPayoutRequestRepositoryService.php', true],
            'App\\Repository\\PointOfSaleRepository' => ['privates', 'App\\Repository\\PointOfSaleRepository', 'getPointOfSaleRepositoryService.php', true],
            'App\\Repository\\ReviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService.php', true],
            'App\\Repository\\ScannerRepository' => ['privates', 'App\\Repository\\ScannerRepository', 'getScannerRepositoryService.php', true],
            'App\\Repository\\SettingsRepository' => ['privates', 'App\\Repository\\SettingsRepository', 'getSettingsRepositoryService.php', true],
            'App\\Repository\\ThreadRepository' => ['privates', 'App\\Repository\\ThreadRepository', 'getThreadRepositoryService.php', true],
            'App\\Repository\\TicketReservationRepository' => ['privates', 'App\\Repository\\TicketReservationRepository', 'getTicketReservationRepositoryService.php', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
            'App\\Repository\\VenueImageRepository' => ['privates', 'App\\Repository\\VenueImageRepository', 'getVenueImageRepositoryService.php', true],
            'App\\Repository\\VenueRepository' => ['privates', 'App\\Repository\\VenueRepository', 'getVenueRepositoryService.php', true],
            'App\\Repository\\VenueTranslationRepository' => ['privates', 'App\\Repository\\VenueTranslationRepository', 'getVenueTranslationRepositoryService.php', true],
            'App\\Repository\\VenueTypeRepository' => ['privates', 'App\\Repository\\VenueTypeRepository', 'getVenueTypeRepositoryService.php', true],
            'App\\Repository\\VenueTypeTranslationRepository' => ['privates', 'App\\Repository\\VenueTypeTranslationRepository', 'getVenueTypeTranslationRepositoryService.php', true],
            'App\\Repository\\VoteRepository' => ['privates', 'App\\Repository\\VoteRepository', 'getVoteRepositoryService.php', true],
        ], [
            'App\\Repository\\AmenityRepository' => '?',
            'App\\Repository\\AmenityTranslationRepository' => '?',
            'App\\Repository\\AppLayoutSettingsRepository' => '?',
            'App\\Repository\\AudienceRepository' => '?',
            'App\\Repository\\AudienceTranslationRepository' => '?',
            'App\\Repository\\BlogPostCategoryRepository' => '?',
            'App\\Repository\\BlogPostCategoryTranslationRepository' => '?',
            'App\\Repository\\BlogPostRepository' => '?',
            'App\\Repository\\BlogPostTranslationRepository' => '?',
            'App\\Repository\\CartElementRepository' => '?',
            'App\\Repository\\CategoryRepository' => '?',
            'App\\Repository\\CategoryTranslationRepository' => '?',
            'App\\Repository\\CommentRepository' => '?',
            'App\\Repository\\CountryRepository' => '?',
            'App\\Repository\\CountryTranslationRepository' => '?',
            'App\\Repository\\CurrencyRepository' => '?',
            'App\\Repository\\EventDateRepository' => '?',
            'App\\Repository\\EventImageRepository' => '?',
            'App\\Repository\\EventRepository' => '?',
            'App\\Repository\\EventTicketRepository' => '?',
            'App\\Repository\\EventTranslationRepository' => '?',
            'App\\Repository\\HelpCenterArticleRepository' => '?',
            'App\\Repository\\HelpCenterArticleTranslationRepository' => '?',
            'App\\Repository\\HelpCenterCategoryRepository' => '?',
            'App\\Repository\\HelpCenterCategoryTranslationRepository' => '?',
            'App\\Repository\\HomepageHeroSettingsRepository' => '?',
            'App\\Repository\\HomepageHeroSettingsTranslationRepository' => '?',
            'App\\Repository\\LanguageRepository' => '?',
            'App\\Repository\\LanguageTranslationRepository' => '?',
            'App\\Repository\\MenuElementRepository' => '?',
            'App\\Repository\\MenuElementTranslationRepository' => '?',
            'App\\Repository\\MenuRepository' => '?',
            'App\\Repository\\MenuTranslationRepository' => '?',
            'App\\Repository\\OrderElementRepository' => '?',
            'App\\Repository\\OrderRepository' => '?',
            'App\\Repository\\OrderTicketRepository' => '?',
            'App\\Repository\\OrganizerRepository' => '?',
            'App\\Repository\\PageRepository' => '?',
            'App\\Repository\\PageTranslationRepository' => '?',
            'App\\Repository\\PaymentGatewayRepository' => '?',
            'App\\Repository\\PaymentRepository' => '?',
            'App\\Repository\\PaymentTokenRepository' => '?',
            'App\\Repository\\PayoutRequestRepository' => '?',
            'App\\Repository\\PointOfSaleRepository' => '?',
            'App\\Repository\\ReviewRepository' => '?',
            'App\\Repository\\ScannerRepository' => '?',
            'App\\Repository\\SettingsRepository' => '?',
            'App\\Repository\\ThreadRepository' => '?',
            'App\\Repository\\TicketReservationRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
            'App\\Repository\\VenueImageRepository' => '?',
            'App\\Repository\\VenueRepository' => '?',
            'App\\Repository\\VenueTranslationRepository' => '?',
            'App\\Repository\\VenueTypeRepository' => '?',
            'App\\Repository\\VenueTypeTranslationRepository' => '?',
            'App\\Repository\\VoteRepository' => '?',
        ])));
        $a->addCustomStringFunction('substring_index', 'DoctrineExtensions\\Query\\Mysql\\SubstringIndex');
        $a->addCustomStringFunction('group_concat', 'DoctrineExtensions\\Query\\Mysql\\GroupConcat');
        $a->addCustomDatetimeFunction('date', 'DoctrineExtensions\\Query\\Mysql\\Date');
        $a->addCustomDatetimeFunction('now', 'DoctrineExtensions\\Query\\Mysql\\Now');
        $a->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([0 => 'softdeleteable'], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['webpack_encore.exception_listener'] ?? $this->load('getWebpackEncore_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('welp.mailchimp.subscribe', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onSubscribe'], 0);
        $instance->addListener('welp.mailchimp.unsubscribe', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onUnsubscribe'], 0);
        $instance->addListener('welp.mailchimp.pending', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onPending'], 0);
        $instance->addListener('welp.mailchimp.clean', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onClean'], 0);
        $instance->addListener('welp.mailchimp.update', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onUpdate'], 0);
        $instance->addListener('welp.mailchimp.change_email', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onChangeEmail'], 0);
        $instance->addListener('welp.mailchimp.delete', [0 => function () {
            return ($this->privates['welp_mailchimp.subscriber_listener'] ?? $this->load('getWelpMailchimp_SubscriberListenerService.php'));
        }, 1 => 'onDelete'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->services['payum.listener.reply_to_http_response'] ?? $this->load('getPayum_Listener_ReplyToHttpResponseService.php'));
        }, 1 => 'onKernelException'], 128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('presta_sitemap.populate', [0 => function () {
            return ($this->privates['App\\EventListener\\SitemapSubscriber'] ?? $this->load('getSitemapSubscriberService.php'));
        }, 1 => 'populate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\MaintenanceModeSubscriber'] ?? $this->getMaintenanceModeSubscriberService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\WebsiteConfiguredSubscriber'] ?? $this->getWebsiteConfiguredSubscriberService());
        }, 1 => 'onRequest'], 0);
        $instance->addListener('presta_sitemap.populate', [0 => function () {
            return ($this->privates['sitemap.subscriber'] ?? $this->load('getSitemap_SubscriberService.php'));
        }, 1 => 'populate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.success', [0 => function () {
            return ($this->privates['fos_user.listener.email_confirmation'] ?? $this->load('getFosUser_Listener_EmailConfirmationService.php'));
        }, 1 => 'onRegistrationSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('fos_comment.vote.pre_persist', [0 => function () {
            return ($this->privates['fos_comment.listener.comment_vote_score'] ?? ($this->privates['fos_comment.listener.comment_vote_score'] = new \FOS\CommentBundle\EventListener\CommentVoteScoreListener()));
        }, 1 => 'onVotePersist'], 0);
        $instance->addListener('fos_comment.comment.pre_persist', [0 => function () {
            return ($this->privates['fos_comment.listener.thread_counters'] ?? $this->load('getFosComment_Listener_ThreadCountersService.php'));
        }, 1 => 'onCommentPersist'], 0);
        $instance->addListener('fos_comment.thread.create', [0 => function () {
            return ($this->privates['fos_comment.listener.thread_permalink'] ?? $this->load('getFosComment_Listener_ThreadPermalinkService.php'));
        }, 1 => 'onThreadCreate'], 0);
        $instance->addListener('fos_comment.comment.pre_persist', [0 => function () {
            return ($this->privates['fos_comment.listener.comment_blamer'] ?? $this->load('getFosComment_Listener_CommentBlamerService.php'));
        }, 1 => 'blame'], 0);
        $instance->addListener('fos_comment.vote.pre_persist', [0 => function () {
            return ($this->privates['fos_comment.listener.vote_blamer'] ?? $this->load('getFosComment_Listener_VoteBlamerService.php'));
        }, 1 => 'blame'], 0);
        $instance->addListener('fos_comment.comment.pre_persist', [0 => function () {
            return ($this->privates['fos_comment.listener.closed_threads'] ?? ($this->privates['fos_comment.listener.closed_threads'] = new \FOS\CommentBundle\EventListener\ClosedThreadListener()));
        }, 1 => 'onCommentPersist'], 0);
        $instance->addListener('presta_sitemap.populate', [0 => function () {
            return ($this->privates['presta_sitemap.eventlistener.route_annotation'] ?? $this->load('getPrestaSitemap_Eventlistener_RouteAnnotationService.php'));
        }, 1 => 'registerRouteAnnotation'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'fos_comment.acl.comment' shared service.
     *
     * @return \FOS\CommentBundle\Acl\RoleCommentAcl
     */
    protected function getFosComment_Acl_CommentService()
    {
        return $this->services['fos_comment.acl.comment'] = new \FOS\CommentBundle\Acl\RoleCommentAcl(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), 'IS_AUTHENTICATED_REMEMBERED', 'IS_AUTHENTICATED_ANONYMOUSLY', 'ROLE_ADMINISTRATOR', 'ROLE_ADMINISTRATOR', 'App\\Entity\\Comment');
    }

    /*
     * Gets the public 'fos_comment.acl.thread' shared service.
     *
     * @return \FOS\CommentBundle\Acl\RoleThreadAcl
     */
    protected function getFosComment_Acl_ThreadService()
    {
        return $this->services['fos_comment.acl.thread'] = new \FOS\CommentBundle\Acl\RoleThreadAcl(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), 'IS_AUTHENTICATED_ANONYMOUSLY', 'IS_AUTHENTICATED_ANONYMOUSLY', 'ROLE_ADMINISTRATOR', 'ROLE_ADMINISTRATOR', 'App\\Entity\\Thread');
    }

    /*
     * Gets the public 'fos_comment.acl.vote' shared service.
     *
     * @return \FOS\CommentBundle\Acl\RoleVoteAcl
     */
    protected function getFosComment_Acl_VoteService()
    {
        return $this->services['fos_comment.acl.vote'] = new \FOS\CommentBundle\Acl\RoleVoteAcl(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), 'IS_AUTHENTICATED_REMEMBERED', 'IS_AUTHENTICATED_ANONYMOUSLY', 'ROLE_ADMINISTRATOR', 'ROLE_ADMINISTRATOR', 'App\\Entity\\Vote');
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'hwi_oauth.resource_ownermap.main' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap
     */
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), $this->parameters['hwi_oauth.resource_owners'], $this->parameters['hwi_oauth.resource_ownermap.configured.main']);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'hwi_oauth.security.oauth_utils' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), true, 'IS_AUTHENTICATED_REMEMBERED');

        $instance->addResourceOwnerMap(($this->services['hwi_oauth.resource_ownermap.main'] ?? $this->getHwiOauth_ResourceOwnermap_MainService()));

        return $instance;
    }

    /*
     * Gets the public 'jms_translation.twig_extension' shared service.
     *
     * @return \JMS\TranslationBundle\Twig\TranslationExtension
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService()), false);
    }

    /*
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

        $instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->getLiipImagine_Cache_Resolver_DefaultService()));
        $instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()));

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'media/cache');
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /*
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, $this->getEnv('DEFAULT_LOCALE'));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), $this->getEnv('DEFAULT_LOCALE'), ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ar.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ar.xliff'), 8 => (\dirname(__DIR__, 4).'/translations/FOSCommentBundle.ar.xliff'), 9 => (\dirname(__DIR__, 4).'/translations/FOSUserBundle.ar.xliff'), 10 => (\dirname(__DIR__, 4).'/translations/javascript.ar.xliff'), 11 => (\dirname(__DIR__, 4).'/translations/messages.ar.xliff'), 12 => (\dirname(__DIR__, 4).'/translations/validators.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.bg.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.bg.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.bg.yml')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ca.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.cs.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.cs.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.cs.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.cs.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.cs.yml')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.da.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.da.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.da.yml')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.de.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.de.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.de.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.de.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.de.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.de.yml')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.en.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.en.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.en.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.en.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.en.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.en.yml'), 12 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/validators.en.yml'), 13 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.en.yml'), 14 => (\dirname(__DIR__, 4).'/translations/FOSCommentBundle.en.xliff'), 15 => (\dirname(__DIR__, 4).'/translations/FOSUserBundle.en.xliff'), 16 => (\dirname(__DIR__, 4).'/translations/javascript.en.xliff'), 17 => (\dirname(__DIR__, 4).'/translations/messages.en.xliff'), 18 => (\dirname(__DIR__, 4).'/translations/validators.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.es.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.es.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.es.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.es.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.es.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.es.yml'), 12 => (\dirname(__DIR__, 4).'/translations/FOSCommentBundle.es.xliff'), 13 => (\dirname(__DIR__, 4).'/translations/FOSUserBundle.es.xliff'), 14 => (\dirname(__DIR__, 4).'/translations/javascript.es.xliff'), 15 => (\dirname(__DIR__, 4).'/translations/messages.es.xliff'), 16 => (\dirname(__DIR__, 4).'/translations/validators.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.et.yml')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.fa.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fa.yml')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fi.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.fi.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.fi.yml')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.fr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.fr.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fr.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.fr.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.fr.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.fr.yml'), 12 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/validators.fr.yml'), 13 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.fr.yml'), 14 => (\dirname(__DIR__, 4).'/translations/FOSCommentBundle.fr.xliff'), 15 => (\dirname(__DIR__, 4).'/translations/FOSUserBundle.fr.xliff'), 16 => (\dirname(__DIR__, 4).'/translations/javascript.fr.xliff'), 17 => (\dirname(__DIR__, 4).'/translations/messages.fr.xliff'), 18 => (\dirname(__DIR__, 4).'/translations/validators.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.hr.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.hr.yml')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.hu.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.hu.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.hu.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.hu.yml')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.id.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.id.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.id.yml')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.it.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.it.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.it.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.it.yml'), 10 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.it.yml')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ja.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ja.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.ja.yml')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.lt.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.mn.yml')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.nl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.nl.xlf'), 7 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.nl.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.nl.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.nl.yml')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.pl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.pl.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.pl.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pl.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.pl.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.pl.yml')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.pt.yml')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.pt_BR.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ro.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ro.xlf'), 7 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ro.xliff'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.ro.yml')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ru.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ru.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.ru.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ru.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.ru.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations/messages.ru.yml')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.sk.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.sl.xlf'), 7 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sl.xliff'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.sl.yml')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.sr_Cyrl.yml')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.sr_Latn.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sr_Latn.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.sr_Latn.yml')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.sv.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.tr.xlf'), 7 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.tr.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.tr.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.tr.yml')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.uk.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.uk.xlf'), 8 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.uk.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.vi.xliff')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.zh_CN.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_CN.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.zh_CN.yml')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_TW.xliff')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt_PT.xliff')], 'ky' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ky.xliff'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.sw.xliff')], 'bn' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')], 'bn_BD' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')], 'eo' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 2 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.eo.xliff')], 'zh' => [0 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.zh.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh.xliff')], 'bs_Latn_BA' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.bs_Latn_BA.xliff')], 'hr_HR' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.hr_HR.xliff')], 'sr_Latin' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sr_Latin.xliff')], 'zh_HK' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_HK.xliff')], 'fa_IR' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations/FOSCommentBundle.fa_IR.yml')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/translations'), 8 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/translations'), 10 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/translations'), 12 => (\dirname(__DIR__, 4).'/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/SensioFrameworkExtraBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineMigrationsBundle/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 22 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 23 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations'), 24 => (\dirname(__DIR__, 4).'/src/Resources/SwiftmailerBundle/translations'), 25 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 26 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 27 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 28 => (\dirname(__DIR__, 4).'/src/Resources/MonologBundle/translations'), 29 => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/translations'), 30 => (\dirname(__DIR__, 4).'/src/Resources/WebpackEncoreBundle/translations'), 31 => (\dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/translations'), 32 => (\dirname(__DIR__, 4).'/src/Resources/JMSTranslationBundle/translations'), 33 => (\dirname(__DIR__, 4).'/vendor/willdurand/js-translation-bundle/translations'), 34 => (\dirname(__DIR__, 4).'/src/Resources/BazingaJsTranslationBundle/translations'), 35 => (\dirname(__DIR__, 4).'/vendor/a2lix/auto-form-bundle/src/translations'), 36 => (\dirname(__DIR__, 4).'/src/Resources/A2lixAutoFormBundle/translations'), 37 => (\dirname(__DIR__, 4).'/vendor/a2lix/translation-form-bundle/src/translations'), 38 => (\dirname(__DIR__, 4).'/src/Resources/A2lixTranslationFormBundle/translations'), 39 => (\dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Bundle/translations'), 40 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBehaviorsBundle/translations'), 41 => (\dirname(__DIR__, 4).'/src/Resources/KnpPaginatorBundle/translations'), 42 => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle/translations'), 43 => (\dirname(__DIR__, 4).'/src/Resources/StofDoctrineExtensionsBundle/translations'), 44 => (\dirname(__DIR__, 4).'/src/Resources/VichUploaderBundle/translations'), 45 => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/translations'), 46 => (\dirname(__DIR__, 4).'/src/Resources/LiipImagineBundle/translations'), 47 => (\dirname(__DIR__, 4).'/src/Resources/FOSUserBundle/translations'), 48 => (\dirname(__DIR__, 4).'/src/Resources/EWZRecaptchaBundle/translations'), 49 => (\dirname(__DIR__, 4).'/vendor/php-http/httplug-bundle/src/translations'), 50 => (\dirname(__DIR__, 4).'/src/Resources/HttplugBundle/translations'), 51 => (\dirname(__DIR__, 4).'/src/Resources/HWIOAuthBundle/translations'), 52 => (\dirname(__DIR__, 4).'/vendor/pugx/autocompleter-bundle/translations'), 53 => (\dirname(__DIR__, 4).'/src/Resources/PUGXAutocompleterBundle/translations'), 54 => (\dirname(__DIR__, 4).'/vendor/debril/rss-atom-bundle/Debril/RssAtomBundle/translations'), 55 => (\dirname(__DIR__, 4).'/src/Resources/DebrilRssAtomBundle/translations'), 56 => (\dirname(__DIR__, 4).'/src/Resources/KnpTimeBundle/translations'), 57 => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/translations'), 58 => (\dirname(__DIR__, 4).'/src/Resources/JMSSerializerBundle/translations'), 59 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/translations'), 60 => (\dirname(__DIR__, 4).'/src/Resources/FOSRestBundle/translations'), 61 => (\dirname(__DIR__, 4).'/src/Resources/FOSCommentBundle/translations'), 62 => (\dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/translations'), 63 => (\dirname(__DIR__, 4).'/src/Resources/WelpMailchimpBundle/translations'), 64 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/translations'), 65 => (\dirname(__DIR__, 4).'/src/Resources/FOSJsRoutingBundle/translations'), 66 => (\dirname(__DIR__, 4).'/src/Resources/PayumBundle/translations'), 67 => (\dirname(__DIR__, 4).'/vendor/yellowskies/qr-code-bundle/translations'), 68 => (\dirname(__DIR__, 4).'/src/Resources/SkiesQRcodeBundle/translations'), 69 => (\dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle/translations'), 70 => (\dirname(__DIR__, 4).'/src/Resources/CMENGoogleChartsBundle/translations'), 71 => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/translations'), 72 => (\dirname(__DIR__, 4).'/src/Resources/NelmioCorsBundle/translations'), 73 => (\dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/translations'), 74 => (\dirname(__DIR__, 4).'/src/Resources/ExerciseHTMLPurifierBundle/translations'), 75 => (\dirname(__DIR__, 4).'/src/Resources/CoreSphereConsoleBundle/translations'), 76 => (\dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/translations'), 77 => (\dirname(__DIR__, 4).'/src/Resources/PrestaSitemapBundle/translations'), 78 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/knplabs/knp-paginator-bundle/Resources/translations', 4 => 'vendor/vich/uploader-bundle/Resources/translations', 5 => 'vendor/friendsofsymfony/user-bundle/Resources/translations', 6 => 'vendor/excelwebzone/recaptcha-bundle/src/Resources/translations', 7 => 'vendor/hwi/oauth-bundle/Resources/translations', 8 => 'vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations', 9 => 'vendor/friendsofsymfony/comment-bundle/Resources/translations', 10 => 'vendor/payum/payum-bundle/Resources/translations', 11 => 'vendor/coresphere/console-bundle/Resources/translations', 12 => 'translations', 13 => 'vendor/symfony/framework-bundle/translations', 14 => 'src/Resources/FrameworkBundle/translations', 15 => 'vendor/sensio/framework-extra-bundle/src/translations', 16 => 'src/Resources/SensioFrameworkExtraBundle/translations', 17 => 'vendor/doctrine/doctrine-bundle/translations', 18 => 'src/Resources/DoctrineBundle/translations', 19 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 20 => 'src/Resources/DoctrineMigrationsBundle/translations', 21 => 'vendor/symfony/security-bundle/translations', 22 => 'src/Resources/SecurityBundle/translations', 23 => 'vendor/symfony/swiftmailer-bundle/translations', 24 => 'src/Resources/SwiftmailerBundle/translations', 25 => 'vendor/symfony/twig-bundle/translations', 26 => 'src/Resources/TwigBundle/translations', 27 => 'vendor/symfony/monolog-bundle/translations', 28 => 'src/Resources/MonologBundle/translations', 29 => 'vendor/symfony/webpack-encore-bundle/src/translations', 30 => 'src/Resources/WebpackEncoreBundle/translations', 31 => 'vendor/jms/translation-bundle/JMS/TranslationBundle/translations', 32 => 'src/Resources/JMSTranslationBundle/translations', 33 => 'vendor/willdurand/js-translation-bundle/translations', 34 => 'src/Resources/BazingaJsTranslationBundle/translations', 35 => 'vendor/a2lix/auto-form-bundle/src/translations', 36 => 'src/Resources/A2lixAutoFormBundle/translations', 37 => 'vendor/a2lix/translation-form-bundle/src/translations', 38 => 'src/Resources/A2lixTranslationFormBundle/translations', 39 => 'vendor/knplabs/doctrine-behaviors/src/Bundle/translations', 40 => 'src/Resources/DoctrineBehaviorsBundle/translations', 41 => 'src/Resources/KnpPaginatorBundle/translations', 42 => 'vendor/stof/doctrine-extensions-bundle/translations', 43 => 'src/Resources/StofDoctrineExtensionsBundle/translations', 44 => 'src/Resources/VichUploaderBundle/translations', 45 => 'vendor/liip/imagine-bundle/translations', 46 => 'src/Resources/LiipImagineBundle/translations', 47 => 'src/Resources/FOSUserBundle/translations', 48 => 'src/Resources/EWZRecaptchaBundle/translations', 49 => 'vendor/php-http/httplug-bundle/src/translations', 50 => 'src/Resources/HttplugBundle/translations', 51 => 'src/Resources/HWIOAuthBundle/translations', 52 => 'vendor/pugx/autocompleter-bundle/translations', 53 => 'src/Resources/PUGXAutocompleterBundle/translations', 54 => 'vendor/debril/rss-atom-bundle/Debril/RssAtomBundle/translations', 55 => 'src/Resources/DebrilRssAtomBundle/translations', 56 => 'src/Resources/KnpTimeBundle/translations', 57 => 'vendor/jms/serializer-bundle/translations', 58 => 'src/Resources/JMSSerializerBundle/translations', 59 => 'vendor/friendsofsymfony/rest-bundle/translations', 60 => 'src/Resources/FOSRestBundle/translations', 61 => 'src/Resources/FOSCommentBundle/translations', 62 => 'vendor/welp/mailchimp-bundle/src/translations', 63 => 'src/Resources/WelpMailchimpBundle/translations', 64 => 'vendor/friendsofsymfony/jsrouting-bundle/translations', 65 => 'src/Resources/FOSJsRoutingBundle/translations', 66 => 'src/Resources/PayumBundle/translations', 67 => 'vendor/yellowskies/qr-code-bundle/translations', 68 => 'src/Resources/SkiesQRcodeBundle/translations', 69 => 'vendor/cmen/google-charts-bundle/translations', 70 => 'src/Resources/CMENGoogleChartsBundle/translations', 71 => 'vendor/nelmio/cors-bundle/translations', 72 => 'src/Resources/NelmioCorsBundle/translations', 73 => 'vendor/exercise/htmlpurifier-bundle/src/translations', 74 => 'src/Resources/ExerciseHTMLPurifierBundle/translations', 75 => 'src/Resources/CoreSphereConsoleBundle/translations', 76 => 'vendor/presta/sitemap-bundle/translations', 77 => 'src/Resources/PrestaSitemapBundle/translations', 78 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => $this->getEnv('DEFAULT_LOCALE'), 1 => $this->getEnv('DEFAULT_LOCALE')]);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views'), 'JMSTranslation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views'), '!JMSTranslation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/willdurand/js-translation-bundle/Resources/views'), 'BazingaJsTranslation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/willdurand/js-translation-bundle/Resources/views'), '!BazingaJsTranslation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/a2lix/translation-form-bundle/src/Resources/views'), 'A2lixTranslationForm');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/a2lix/translation-form-bundle/src/Resources/views'), '!A2lixTranslationForm');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Resources/views'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Resources/views'), '!VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), '!LiipImagine');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/FOSUserBundle'), 'FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/views'), 'EWZRecaptcha');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src/Resources/views'), '!EWZRecaptcha');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/php-http/httplug-bundle/src/Resources/views'), 'Httplug');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/php-http/httplug-bundle/src/Resources/views'), '!Httplug');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/views'), 'HWIOAuth');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Resources/views'), '!HWIOAuth');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/FOSCommentBundle'), 'FOSComment');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/views'), 'FOSComment');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Resources/views'), '!FOSComment');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/views'), 'Payum');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/views'), '!Payum');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/views'), 'CoreSphereConsole');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Resources/views'), '!CoreSphereConsole');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = ($this->services['router'] ?? $this->getRouterService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \CMEN\GoogleChartsBundle\Output\Javascript\DateOutput();
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('prod');
        $f->setDebug(false);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(($this->privates['url_helper'] ?? $this->getUrlHelperService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \App\Twig\AppExtension());
        $instance->addExtension(new \Twig\Extensions\IntlExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService.php', true],
            'webpack_encore.tag_renderer' => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService.php', true],
        ], [
            'webpack_encore.entrypoint_lookup_collection' => '?',
            'webpack_encore.tag_renderer' => '?',
        ])));
        $instance->addExtension(($this->services['jms_translation.twig_extension'] ?? $this->getJmsTranslation_TwigExtensionService()));
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($c, $b)));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->getVichUploader_Templating_Helper_UploaderHelperService())));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService())));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension(new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper(($this->services['hwi_oauth.security.oauth_utils'] ?? $this->getHwiOauth_Security_OauthUtilsService()), $d)));
        $instance->addExtension(new \Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension(new \Knp\Bundle\TimeBundle\Templating\Helper\TimeHelper(new \Knp\Bundle\TimeBundle\DateTimeFormatter($b))));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \FOS\CommentBundle\Twig\CommentExtension(($this->services['fos_comment.acl.comment'] ?? $this->getFosComment_Acl_CommentService()), ($this->services['fos_comment.acl.vote'] ?? $this->getFosComment_Acl_VoteService()), ($this->services['fos_comment.acl.thread'] ?? $this->getFosComment_Acl_ThreadService())));
        $instance->addExtension(new \Skies\QRcodeBundle\Twig\Extensions\Barcode(new \Skies\QRcodeBundle\Generator\Generator()));
        $instance->addExtension(new \CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension(new \CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput('current', '', new \CMEN\GoogleChartsBundle\Output\Javascript\OptionsOutput($e), new \CMEN\GoogleChartsBundle\Output\Javascript\DataOutput($e), new \CMEN\GoogleChartsBundle\Output\Javascript\EventsOutput())));
        $instance->addExtension(new \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension());
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Exercise\\HTMLPurifierBundle\\Twig\\HTMLPurifierRuntime' => ['privates', 'exercise_html_purifier.twig.runtime', 'getExerciseHtmlPurifier_Twig_RuntimeService.php', true],
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'Exercise\\HTMLPurifierBundle\\Twig\\HTMLPurifierRuntime' => '?',
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('services', ($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()));
        $instance->addGlobal('locales', $this->getEnv('APP_LOCALES'));
        $instance->addGlobal('google_maps_api_key', $this->getEnv('GOOGLE_MAPS_API_KEY'));
        $instance->addGlobal('date_format', $this->getEnv('DATE_FORMAT'));
        $instance->addGlobal('date_format_date_only', $this->getEnv('DATE_FORMAT_DATE_ONLY'));
        $instance->addGlobal('date_timezone', $this->getEnv('DATE_TIMEZONE'));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator($this->getEnv('DATE_FORMAT'), '%d days', $this->getEnv('DATE_TIMEZONE'), 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /*
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private 'App\EventSubscriber\MaintenanceModeSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\MaintenanceModeSubscriber
     */
    protected function getMaintenanceModeSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\MaintenanceModeSubscriber'] = new \App\EventSubscriber\MaintenanceModeSubscriber(($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()));
    }

    /*
     * Gets the private 'App\EventSubscriber\WebsiteConfiguredSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\WebsiteConfiguredSubscriber
     */
    protected function getWebsiteConfiguredSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\WebsiteConfiguredSubscriber'] = new \App\EventSubscriber\WebsiteConfiguredSubscriber(($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->services['router'] ?? $this->getRouterService()), ($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /*
     * Gets the private 'App\Service\AppServices' shared autowired service.
     *
     * @return \App\Service\AppServices
     */
    protected function getAppServicesService()
    {
        $a = ($this->services['twig'] ?? $this->getTwigService());

        if (isset($this->privates['App\\Service\\AppServices'])) {
            return $this->privates['App\\Service\\AppServices'];
        }
        $b = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['App\\Service\\AppServices'] = new \App\Service\AppServices(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['cache.app'] ?? $this->getCache_AppService()), $b, ($this->privates['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, $b);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/assets/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.deprecation_filter'] ?? $this->getMonolog_Handler_DeprecationFilterService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('RTi63uNy5W', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('wTvjFydetw', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.decoder.json' => ['privates', 'fos_rest.decoder.json', 'getFosRest_Decoder_JsonService.php', true],
            'fos_rest.decoder.xml' => ['privates', 'fos_rest.decoder.xml', 'getFosRest_Decoder_XmlService.php', true],
        ], [
            'fos_rest.decoder.json' => '?',
            'fos_rest.decoder.xml' => '?',
        ]), ['json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml']), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /*
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->privates['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy(\Http\Discovery\HttpClientDiscovery::find(), NULL);
    }

    /*
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => 'Global/pagination.html.twig', 'defaultSortableTemplate' => 'Global/sortable.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5]);
    }

    /*
     * Gets the private 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration($this->parameters['liip_imagine.filter_sets']);
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->getEnv('DEFAULT_LOCALE'), ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.deprecation' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_DeprecationService()
    {
        $this->privates['monolog.handler.deprecation'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/prod.deprecations.log'), 100, true, NULL, false);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.deprecation_filter' shared service.
     *
     * @return \Monolog\Handler\FilterHandler
     */
    protected function getMonolog_Handler_DeprecationFilterService()
    {
        return $this->privates['monolog.handler.deprecation_filter'] = new \Monolog\Handler\FilterHandler(($this->privates['monolog.handler.deprecation'] ?? $this->getMonolog_Handler_DeprecationService()), 100, 200, true);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/prod.log'), 100, true, NULL, false);
        $a->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => '^/'], 400), 0, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults'))]));
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', $this->getEnv('WEBSITE_ROOT_URL'), 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load('getSecurity_Access_RoleHierarchyVoterService.php'));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.scanner_api'] ?? $this->load('getSecurity_Authentication_Provider_Guard_ScannerApiService.php'));
            yield 1 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 2 => ($this->privates['hwi_oauth.authentication.provider.oauth.main'] ?? $this->load('getHwiOauth_Authentication_Provider_Oauth_MainService.php'));
            yield 3 => ($this->privates['security.authentication.provider.rememberme.main'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_MainService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']], 'Symfony\\Component\\Security\\Core\\User\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
            'security.firewall.map.context.scanner_api' => ['privates', 'security.firewall.map.context.scanner_api', 'getSecurity_Firewall_Map_Context_ScannerApiService.php', true],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
            'security.firewall.map.context.scanner_api' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.scanner_api' => ($this->privates['.security.request_matcher.Avt9.4q'] ?? ($this->privates['.security.request_matcher.Avt9.4q'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^(.*?)/api/scanner/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Component\Security\Core\Security
     */
    protected function getSecurity_HelperService()
    {
        return $this->privates['security.helper'] = new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('scanner_api', '/logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService.php', true],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    protected function getUrlHelperService()
    {
        return $this->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /*
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', false);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /*
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->parameters['vich_uploader.mappings'], '_name');
    }

    /*
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'is_website_configured' => false,
        'maintenance_mode' => false,
        'date_format' => false,
        'date_format_simple' => false,
        'date_format_date_only' => false,
        'date_timezone' => false,
        'locale' => false,
        'locales' => false,
        'website_name' => false,
        'no_reply_email' => false,
        'website_root_url' => false,
        'google_maps_api_key' => false,
        'google_recaptcha_site_key' => false,
        'router.request_context.host' => false,
        'kernel.secret' => false,
        'kernel.default_locale' => false,
        'validator.mapping.cache.file' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'a2lix_translation_form.locales' => false,
        'a2lix_translation_form.required_locales' => false,
        'a2lix_translation_form.default_locale' => false,
        'stof_doctrine_extensions.default_locale' => false,
        'fos_user.registration.confirmation.from_email' => false,
        'fos_user.resetting.email.from_email' => false,
        'ewz_recaptcha.public_key' => false,
        'ewz_recaptcha.private_key' => false,
        'ewz_recaptcha.locale_key' => false,
        'nelmio_cors.defaults' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'is_website_configured': $value = $this->getEnv('IS_WEBSITE_CONFIGURED'); break;
            case 'maintenance_mode': $value = $this->getEnv('MAINTENANCE_MODE'); break;
            case 'date_format': $value = $this->getEnv('DATE_FORMAT'); break;
            case 'date_format_simple': $value = $this->getEnv('DATE_FORMAT_SIMPLE'); break;
            case 'date_format_date_only': $value = $this->getEnv('DATE_FORMAT_DATE_ONLY'); break;
            case 'date_timezone': $value = $this->getEnv('DATE_TIMEZONE'); break;
            case 'locale': $value = $this->getEnv('DEFAULT_LOCALE'); break;
            case 'locales': $value = $this->getEnv('APP_LOCALES'); break;
            case 'website_name': $value = $this->getEnv('WEBSITE_NAME'); break;
            case 'no_reply_email': $value = $this->getEnv('NO_REPLY_EMAIL'); break;
            case 'website_root_url': $value = $this->getEnv('WEBSITE_ROOT_URL'); break;
            case 'google_maps_api_key': $value = $this->getEnv('GOOGLE_MAPS_API_KEY'); break;
            case 'google_recaptcha_site_key': $value = $this->getEnv('GOOGLE_RECAPTCHA_SITE_KEY'); break;
            case 'router.request_context.host': $value = $this->getEnv('WEBSITE_ROOT_URL'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'kernel.default_locale': $value = $this->getEnv('DEFAULT_LOCALE'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            case 'a2lix_translation_form.locales': $value = [
                0 => $this->getEnv('DEFAULT_LOCALE'),
                1 => 'en',
                2 => 'fr',
                3 => 'es',
                4 => 'ar',
            ]; break;
            case 'a2lix_translation_form.required_locales': $value = [
                0 => $this->getEnv('DEFAULT_LOCALE'),
            ]; break;
            case 'a2lix_translation_form.default_locale': $value = $this->getEnv('DEFAULT_LOCALE'); break;
            case 'stof_doctrine_extensions.default_locale': $value = $this->getEnv('DEFAULT_LOCALE'); break;
            case 'fos_user.registration.confirmation.from_email': $value = [
                $this->getEnv('NO_REPLY_EMAIL') => $this->getEnv('WEBSITE_NAME'),
            ]; break;
            case 'fos_user.resetting.email.from_email': $value = [
                $this->getEnv('NO_REPLY_EMAIL') => $this->getEnv('WEBSITE_NAME'),
            ]; break;
            case 'ewz_recaptcha.public_key': $value = $this->getEnv('EWZ_RECAPTCHA_SITE_KEY'); break;
            case 'ewz_recaptcha.private_key': $value = $this->getEnv('EWZ_RECAPTCHA_SECRET'); break;
            case 'ewz_recaptcha.locale_key': $value = $this->getEnv('DEFAULT_LOCALE'); break;
            case 'nelmio_cors.defaults': $value = [
                'allow_origin' => [
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ],
                'allow_credentials' => false,
                'allow_headers' => [
                    0 => 'content-type',
                    1 => 'x-auth-token',
                ],
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'WebpackEncoreBundle' => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'A2lixAutoFormBundle' => 'A2lix\\AutoFormBundle\\A2lixAutoFormBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'DoctrineBehaviorsBundle' => 'Knp\\DoctrineBehaviors\\Bundle\\DoctrineBehaviorsBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'EWZRecaptchaBundle' => 'EWZ\\Bundle\\RecaptchaBundle\\EWZRecaptchaBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'PUGXAutocompleterBundle' => 'PUGX\\AutocompleterBundle\\PUGXAutocompleterBundle',
                'DebrilRssAtomBundle' => 'Debril\\RssAtomBundle\\DebrilRssAtomBundle',
                'KnpTimeBundle' => 'Knp\\Bundle\\TimeBundle\\KnpTimeBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSCommentBundle' => 'FOS\\CommentBundle\\FOSCommentBundle',
                'WelpMailchimpBundle' => 'Welp\\MailchimpBundle\\WelpMailchimpBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'PayumBundle' => 'Payum\\Bundle\\PayumBundle\\PayumBundle',
                'SkiesQRcodeBundle' => 'Skies\\QRcodeBundle\\SkiesQRcodeBundle',
                'CMENGoogleChartsBundle' => 'CMEN\\GoogleChartsBundle\\CMENGoogleChartsBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'ExerciseHTMLPurifierBundle' => 'Exercise\\HTMLPurifierBundle\\ExerciseHTMLPurifierBundle',
                'CoreSphereConsoleBundle' => 'CoreSphere\\ConsoleBundle\\CoreSphereConsoleBundle',
                'PrestaSitemapBundle' => 'Presta\\SitemapBundle\\PrestaSitemapBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'WebpackEncoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
                'JMSTranslationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle'),
                    'namespace' => 'JMS\\TranslationBundle',
                ],
                'BazingaJsTranslationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/willdurand/js-translation-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\JsTranslationBundle',
                ],
                'A2lixAutoFormBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/a2lix/auto-form-bundle/src'),
                    'namespace' => 'A2lix\\AutoFormBundle',
                ],
                'A2lixTranslationFormBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/a2lix/translation-form-bundle/src'),
                    'namespace' => 'A2lix\\TranslationFormBundle',
                ],
                'DoctrineBehaviorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Bundle'),
                    'namespace' => 'Knp\\DoctrineBehaviors\\Bundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'VichUploaderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'FOSUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'EWZRecaptchaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/excelwebzone/recaptcha-bundle/src'),
                    'namespace' => 'EWZ\\Bundle\\RecaptchaBundle',
                ],
                'HttplugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/php-http/httplug-bundle/src'),
                    'namespace' => 'Http\\HttplugBundle',
                ],
                'HWIOAuthBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle'),
                    'namespace' => 'HWI\\Bundle\\OAuthBundle',
                ],
                'PUGXAutocompleterBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/pugx/autocompleter-bundle'),
                    'namespace' => 'PUGX\\AutocompleterBundle',
                ],
                'DebrilRssAtomBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/debril/rss-atom-bundle/Debril/RssAtomBundle'),
                    'namespace' => 'Debril\\RssAtomBundle',
                ],
                'KnpTimeBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle'),
                    'namespace' => 'Knp\\Bundle\\TimeBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'FOSRestBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ],
                'FOSCommentBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle'),
                    'namespace' => 'FOS\\CommentBundle',
                ],
                'WelpMailchimpBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src'),
                    'namespace' => 'Welp\\MailchimpBundle',
                ],
                'FOSJsRoutingBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ],
                'PayumBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle'),
                    'namespace' => 'Payum\\Bundle\\PayumBundle',
                ],
                'SkiesQRcodeBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/yellowskies/qr-code-bundle'),
                    'namespace' => 'Skies\\QRcodeBundle',
                ],
                'CMENGoogleChartsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/cmen/google-charts-bundle'),
                    'namespace' => 'CMEN\\GoogleChartsBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'ExerciseHTMLPurifierBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src'),
                    'namespace' => 'Exercise\\HTMLPurifierBundle',
                ],
                'CoreSphereConsoleBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/coresphere/console-bundle'),
                    'namespace' => 'CoreSphere\\ConsoleBundle',
                ],
                'PrestaSitemapBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle'),
                    'namespace' => 'Presta\\SitemapBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.dumper.inline_class_loader' => true,
            'available_locales' => 'en|fr|es|ar|',
            'hwi_oauth_user_provider.class' => 'App\\Security\\FOSUBUserProvider',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.save_path' => (\dirname(__DIR__, 4).'/sessions/prod'),
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
                'ROLE_ADMINISTRATOR' => [
                    0 => 'ROLE_SUPER_ADMIN',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => [
                'facebook' => '/login/check-facebook',
                'google' => '/login/check-google',
            ],
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'Global/bootstrap-4-forms-layout.html.twig',
                3 => '@LiipImagine/Form/form_div_layout.html.twig',
                4 => '@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig',
                5 => '@A2lixTranslationForm/bootstrap_4_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.deprecation_filter' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'php',
                    ],
                ],
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                    ],
                ],
                'monolog.handler.main' => NULL,
            ],
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.controller.translate_controller.class' => 'JMS\\TranslationBundle\\Controller\\TranslateController',
            'jms_translation.controller.api_controller.class' => 'JMS\\TranslationBundle\\Controller\\ApiController',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.file_source_factory.class' => 'JMS\\TranslationBundle\\Translation\\FileSourceFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => [
                0 => 'en',
                1 => 'fr',
                2 => 'es',
                3 => 'ar',
            ],
            'jms_translation.dumper.add_date' => true,
            'jms_translation.dumper.add_references' => true,
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'a2lix_translation_form.locale_provider' => 'default',
            'a2lix_translation_form.templating' => '@A2lixTranslationForm/bootstrap_4_layout.html.twig',
            'knp.doctrine_behaviors.reflection.class_analyzer.class' => 'Knp\\DoctrineBehaviors\\Reflection\\ClassAnalyzer',
            'knp.doctrine_behaviors.reflection.is_recursive' => true,
            'knp.doctrine_behaviors.translatable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\TranslatableSubscriber',
            'knp.doctrine_behaviors.translatable_subscriber.current_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\CurrentLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.default_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\DefaultLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable',
            'knp.doctrine_behaviors.translatable_subscriber.translation_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.translatable_subscriber.translation_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.softdeletable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\SoftDeletable\\SoftDeletableSubscriber',
            'knp.doctrine_behaviors.softdeletable_subscriber.softdeletable_trait' => 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable',
            'knp.doctrine_behaviors.timestampable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Timestampable\\TimestampableSubscriber',
            'knp.doctrine_behaviors.timestampable_subscriber.timestampable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable',
            'knp.doctrine_behaviors.timestampable_subscriber.db_field_type' => 'datetime',
            'knp.doctrine_behaviors.blameable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\BlameableSubscriber',
            'knp.doctrine_behaviors.blameable_subscriber.blameable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable',
            'knp.doctrine_behaviors.blameable_subscriber.user_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\UserCallable',
            'knp.doctrine_behaviors.blameable_subscriber.user_entity' => NULL,
            'knp.doctrine_behaviors.loggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggableSubscriber',
            'knp.doctrine_behaviors.loggable_subscriber.logger_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggerCallable',
            'knp.doctrine_behaviors.geocodable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Geocodable\\GeocodableSubscriber',
            'knp.doctrine_behaviors.geocodable_subscriber.geocodable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable',
            'knp.doctrine_behaviors.sluggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sluggable\\SluggableSubscriber',
            'knp.doctrine_behaviors.sluggable_subscriber.sluggable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable',
            'knp.doctrine_behaviors.tree_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Tree\\TreeSubscriber',
            'knp.doctrine_behaviors.tree_subscriber.tree_trait' => 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node',
            'knp.doctrine_behaviors.sortable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sortable\\SortableSubscriber',
            'knp.doctrine_behaviors.sortable_subscriber.sortable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'Global/pagination.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => 'Global/sortable.html.twig',
            'knp_paginator.page_range' => 5,
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => [
                'category_image' => [
                    'uri_prefix' => '/uploads/categories',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/categories'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.category_image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'event_image' => [
                    'uri_prefix' => '/uploads/events',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/events'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.event_image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'audience_image' => [
                    'uri_prefix' => '/uploads/audiences',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/audiences'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.audience_image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'venue_image' => [
                    'uri_prefix' => '/uploads/venues',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/venues'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.venue_image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'organizer_logo' => [
                    'uri_prefix' => '/uploads/organizers',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/organizers'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.organizer_logo',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'organizer_cover' => [
                    'uri_prefix' => '/uploads/organizers/covers',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/organizers/covers'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.organizer_cover',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'blog_post_image' => [
                    'uri_prefix' => '/uploads/blog',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/blog'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.blog_post_image',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'homepage_hero_custom_background' => [
                    'uri_prefix' => ('/uploads'.\dirname(__DIR__, 6).'page/hero'),
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/homepage/hero'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.homepage_hero_custom_background',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'user_avatar' => [
                    'uri_prefix' => '/uploads/users/avatars',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/users/avatars'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.user_avatar',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'payment_gateway' => [
                    'uri_prefix' => '/uploads/payment/gateways',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/payment/gateways'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.payment_gateway',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'app_layout' => [
                    'uri_prefix' => '/uploads/layout',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/layout'),
                    'namer' => [
                        'service' => 'vich_uploader.namer_uniqid.app_layout',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
            ],
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                        'cache_prefix' => 'media/cache',
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'locator' => 'filesystem',
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public'),
                        ],
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [
                'scale' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'scale' => [
                            'dim' => [
                                0 => 100,
                                1 => 100,
                            ],
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 100,
                                1 => 100,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => true,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'bundles/FOSUserBundle/Resetting/email.html.twig',
            'fos_user.registration.confirmation.template' => 'bundles/FOSUserBundle/Registration/email.html.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'App\\Form\\RegistrationType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'ewz_recaptcha.locale_from_request' => true,
            'ewz_recaptcha.enabled' => true,
            'ewz_recaptcha.verify_host' => false,
            'ewz_recaptcha.ajax' => false,
            'ewz_recaptcha.api_host' => 'www.google.com',
            'ewz_recaptcha.timeout' => NULL,
            'ewz_recaptcha.trusted_roles' => [

            ],
            'ewz_recaptcha.http_proxy' => [
                'host' => NULL,
                'port' => NULL,
                'auth' => NULL,
            ],
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.asana.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AsanaResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.azure.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AzureResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitbucket2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Bitbucket2ResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.bufferapp.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BufferAppResourceOwner',
            'hwi_oauth.resource_owner.clever.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\CleverResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.deezer.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeezerResourceOwner',
            'hwi_oauth.resource_owner.discogs.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DiscogsResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.fiware.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FiwareResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.gitlab.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitLabResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jawbone.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JawboneResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.office365.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Office365ResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.runkeeper.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RunKeeperResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.slack.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SlackResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.strava.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StravaResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trakt.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TraktResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.wunderlist.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WunderlistResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_owner.itembase.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ItembaseResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'hwi_oauth.firewall_names' => [
                0 => 'main',
            ],
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.failed_use_referer' => false,
            'hwi_oauth.failed_auth_path' => 'hwi_oauth_connect',
            'hwi_oauth.grant_rule' => 'IS_AUTHENTICATED_REMEMBERED',
            'hwi_oauth.resource_owners' => [
                'facebook' => 'facebook',
                'google' => 'google',
            ],
            'hwi_oauth.connect' => true,
            'hwi_oauth.fosub_enabled' => true,
            'hwi_oauth.connect.confirmation' => true,
            'pugx_autocompleter.autocomplete.class' => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteType',
            'pugx_autocompleter.filter_autocomplete.class' => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteFilterType',
            'debril.provider.default.class' => 'Debril\\RssAtomBundle\\Provider\\MockProvider',
            'debril.rss_atom.provider.class' => 'Debril\\RssAtomBundle\\Provider\\MockProvider',
            'debril.provider.doctrine.class' => 'Debril\\RssAtomBundle\\Provider\\DoctrineFeedContentProvider',
            'debril_rss_atom.date_formats' => [
                0 => 'Y-m-d\\TH:i:sP',
                1 => 'D, d M Y H:i:s O',
                2 => 'Y-m-d\\TH:i:sP',
                3 => 'Y-m-d\\TH:i:s.uP',
                4 => 'Y-m-d',
                5 => 'd/m/Y',
                6 => 'd M Y H:i:s P',
                7 => 'D, d M Y H:i O',
                8 => 'D, d M Y H:i:s O',
                9 => 'D M d Y H:i:s e',
            ],
            'debril_rss_atom.public_feeds' => true,
            'debril_rss_atom.force_refresh' => true,
            'debril_rss_atom.content_type_json' => 'application/json',
            'debril_rss_atom.content_type_xml' => 'application/xhtml+xml',
            'time.templating.helper.time.class' => 'Knp\\Bundle\\TimeBundle\\Templating\\Helper\\TimeHelper',
            'time.datetime_formatter.class' => 'Knp\\Bundle\\TimeBundle\\DateTimeFormatter',
            'time.twig.extension.time.class' => 'Knp\\Bundle\\TimeBundle\\Twig\\Extension\\TimeExtension',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 1088,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => [

            ],
            'jms_serializer.xml_serialization_visitor.format_output' => false,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'fos_comment.model.thread.class' => 'App\\Entity\\Thread',
            'fos_comment.model.comment.class' => 'App\\Entity\\Comment',
            'fos_comment.model.vote.class' => 'App\\Entity\\Vote',
            'fos_comment.manager.thread.default.class' => 'FOS\\CommentBundle\\Entity\\ThreadManager',
            'fos_comment.manager.comment.default.class' => 'FOS\\CommentBundle\\Entity\\CommentManager',
            'fos_comment.manager.vote.default.class' => 'FOS\\CommentBundle\\Entity\\VoteManager',
            'fos_comment.listener.comment_vote_score.class' => 'FOS\\CommentBundle\\EventListener\\CommentVoteScoreListener',
            'fos_comment.listener.thread_counters.class' => 'FOS\\CommentBundle\\EventListener\\ThreadCountersListener',
            'fos_comment.listener.thread_permalink.class' => 'FOS\\CommentBundle\\EventListener\\ThreadPermalinkListener',
            'fos_comment.listener.comment_blamer.class' => 'FOS\\CommentBundle\\EventListener\\CommentBlamerListener',
            'fos_comment.listener.vote_blamer.class' => 'FOS\\CommentBundle\\EventListener\\VoteBlamerListener',
            'fos_comment.listener.closed_threads.class' => 'FOS\\CommentBundle\\EventListener\\ClosedThreadListener',
            'fos_comment.sorting_factory.class' => 'FOS\\CommentBundle\\Sorting\\SortingFactory',
            'fos_comment.sorter.date.class' => 'FOS\\CommentBundle\\Sorting\\DateSorting',
            'fos_comment.manager.thread.acl.class' => 'FOS\\CommentBundle\\Acl\\AclThreadManager',
            'fos_comment.manager.comment.acl.class' => 'FOS\\CommentBundle\\Acl\\AclCommentManager',
            'fos_comment.manager.vote.acl.class' => 'FOS\\CommentBundle\\Acl\\AclVoteManager',
            'fos_comment.template.engine' => 'twig',
            'fos_comment.model_manager_name' => NULL,
            'fos_comment.form.comment.type' => 'FOS\\CommentBundle\\Form\\CommentType',
            'fos_comment.form.comment.name' => 'fos_comment_comment',
            'fos_comment.form.thread.type' => 'FOS\\CommentBundle\\Form\\ThreadType',
            'fos_comment.form.thread.name' => 'fos_comment_thread',
            'fos_comment.form.commentable_thread.type' => 'FOS\\CommentBundle\\Form\\CommentableThreadType',
            'fos_comment.form.commentable_thread.name' => 'fos_comment_commentable_thread',
            'fos_comment.form.delete_comment.type' => 'FOS\\CommentBundle\\Form\\DeleteCommentType',
            'fos_comment.form.delete_comment.name' => 'fos_comment_delete_comment',
            'fos_comment.form.vote.type' => 'FOS\\CommentBundle\\Form\\VoteType',
            'fos_comment.form.vote.name' => 'fos_comment_vote',
            'fos_comment.sorting_factory.default_sorter' => 'date_desc',
            'welp_mailchimp.lists' => [
                'b6909a170e' => [
                    'subscriber_provider' => 'eventic_mailchimp_fos_subscriber_provider',
                    'merge_fields' => [
                        0 => [
                            'tag' => 'FNAME',
                            'name' => 'First Name',
                            'type' => 'text',
                            'public' => true,
                        ],
                        1 => [
                            'tag' => 'LNAME',
                            'name' => 'Last Name',
                            'type' => 'text',
                            'public' => true,
                        ],
                    ],
                ],
            ],
            'welp_mailchimp.list_provider' => 'welp_mailchimp.list_provider',
            'welp_mailchimp.api_key' => '542673602536197ee271b0d4d78164da-us20',
            'welp_mailchimp.list_synchronizer_class' => 'Welp\\MailchimpBundle\\Subscriber\\ListSynchronizer',
            'welp_mailchimp.list_repository_class' => 'Welp\\MailchimpBundle\\Subscriber\\ListRepository',
            'welp_mailchimp.subscriber_listener_class' => 'Welp\\MailchimpBundle\\Event\\SubscriberListener',
            'welp_mailchimp.provider_factory_class' => 'Welp\\MailchimpBundle\\Provider\\ProviderFactory',
            'welp_mailchimp.config_list_provider_class' => 'Welp\\MailchimpBundle\\Provider\\ConfigListProvider',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.normalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RouteCollectionNormalizer',
            'fos_js_routing.normalizer.routes_response.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RoutesResponseNormalizer',
            'fos_js_routing.denormalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Denormalizer\\RouteCollectionDenormalizer',
            'fos_js_routing.request_context_base_url' => NULL,
            'fos_js_routing.cache_control' => [
                'enabled' => false,
            ],
            'payum.capture_path' => 'payum_capture_do',
            'payum.notify_path' => 'payum_notify_do',
            'payum.authorize_path' => 'payum_authorize_do',
            'payum.refund_path' => 'payum_refund_do',
            'payum.cancel_path' => 'payum_cancel_do',
            'payum.payout_path' => 'payum_payout_do',
            'payum.available_gateway_factories' => [

            ],
            'payum.storage.doctrine.orm.class' => 'Payum\\Core\\Bridge\\Doctrine\\Storage\\DoctrineStorage',
            'cmen_google_charts.version' => 'current',
            'cmen_google_charts.language' => '',
            'nelmio_cors.map' => [
                '^/api/' => [
                    'allow_origin' => true,
                    'allow_headers' => [
                        0 => 'content-type',
                        1 => 'x-auth-token',
                    ],
                    'allow_methods' => [
                        0 => 'POST',
                        1 => 'GET',
                    ],
                    'max_age' => 3600,
                ],
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'presta_sitemap.generator.class' => 'Presta\\SitemapBundle\\Service\\Generator',
            'presta_sitemap.dumper.class' => 'Presta\\SitemapBundle\\Service\\Dumper',
            'presta_sitemap.routing_loader.class' => 'Presta\\SitemapBundle\\Routing\\SitemapRoutingLoader',
            'presta_sitemap.dump_command.class' => 'Presta\\SitemapBundle\\Command\\DumpSitemapsCommand',
            'presta_sitemap.dump_directory' => 'public',
            'presta_sitemap.timetolive' => 3600,
            'presta_sitemap.sitemap_file_prefix' => 'sitemap',
            'presta_sitemap.items_by_set' => 50000,
            'presta_sitemap.defaults' => [
                'priority' => 0.5,
                'changefreq' => 'daily',
                'lastmod' => 'now',
            ],
            'presta_sitemap.default_section' => 'default',
            'presta_sitemap.eventlistener.route_annotation.class' => 'Presta\\SitemapBundle\\EventListener\\RouteAnnotationEventListener',
            'console.command.ids' => [

            ],
        ];
    }
}
