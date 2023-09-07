<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita980f0024f3d0f5735ebe868807e9545
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LiveChat\\' => 9,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LiveChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin_files',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Elementor\\LiveChatContactButtonWidget' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Widgets/LiveChatContactButtonWidget.class.php',
        'Elementor\\LiveChatQualityBadgeWidget' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Widgets/LiveChatQualityBadgeWidget.class.php',
        'LiveChat\\Drivers\\HttpClient' => __DIR__ . '/../..' . '/plugin_files/Drivers/HttpClient.class.php',
        'LiveChat\\Exceptions\\ApiClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ApiClientException.class.php',
        'LiveChat\\Exceptions\\ErrorCodes' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ErrorCode.class.php',
        'LiveChat\\Exceptions\\HttpClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/HttpClientException.class.php',
        'LiveChat\\Exceptions\\InvalidTokenException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/InvalidTokenException.class.php',
        'LiveChat\\LiveChat' => __DIR__ . '/../..' . '/plugin_files/LiveChat.class.php',
        'LiveChat\\LiveChatAdmin' => __DIR__ . '/../..' . '/plugin_files/LiveChatAdmin.class.php',
        'LiveChat\\Services\\ApiClient' => __DIR__ . '/../..' . '/plugin_files/Services/ApiClient.class.php',
        'LiveChat\\Services\\CertProvider' => __DIR__ . '/../..' . '/plugin_files/Services/CertProvider.class.php',
        'LiveChat\\Services\\ConnectToken' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectToken.class.php',
        'LiveChat\\Services\\ConnectTokenProvider' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectTokenProvider.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\ContactButtonWidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/ContactButtonWidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\QualityBadgeWidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/QualityBadgeWidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\ContactButtonScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/ContactButtonScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\QualityBadgeScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/QualityBadgeScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\ScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/ScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\ContactButtonStyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/ContactButtonStyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\QualityBadgeStyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/QualityBadgeStyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\StyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/StyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\WidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/WidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\ElementorWidgetsProvider' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/ElementorWidgetsProvider.class.php',
        'LiveChat\\Services\\Elementor\\Factories\\ElementorWidgetsFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Factories/ElementorWidgetsFactory.class.php',
        'LiveChat\\Services\\Factories\\ApiClientFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ApiClientFactory.class.php',
        'LiveChat\\Services\\Factories\\ConnectTokenFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ConnectTokenFactory.class.php',
        'LiveChat\\Services\\Factories\\ConnectTokenProviderFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ConnectTokenProviderFactory.class.php',
        'LiveChat\\Services\\Factories\\UrlProviderFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/UrlProviderFactory.class.php',
        'LiveChat\\Services\\LicenseProvider' => __DIR__ . '/../..' . '/plugin_files/Services/LicenseProvider.class.php',
        'LiveChat\\Services\\MenuProvider' => __DIR__ . '/../..' . '/plugin_files/Services/MenuProvider.class.php',
        'LiveChat\\Services\\ModuleConfiguration' => __DIR__ . '/../..' . '/plugin_files/Services/ModuleConfiguration.class.php',
        'LiveChat\\Services\\NotificationsRenderer' => __DIR__ . '/../..' . '/plugin_files/Services/NotificationsRenderer.class.php',
        'LiveChat\\Services\\Notifications\\ConfirmIdentityNotice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/ConfirmIdentityNotice.class.php',
        'LiveChat\\Services\\Notifications\\ConnectNotice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/ConnectNotice.class.php',
        'LiveChat\\Services\\Notifications\\DeactivationModal' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/DeactivationModal.class.php',
        'LiveChat\\Services\\Notifications\\Notice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/Notice.class.php',
        'LiveChat\\Services\\Notifications\\Notification' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/Notification.class.php',
        'LiveChat\\Services\\Options\\AuthorizedUsers' => __DIR__ . '/../..' . '/plugin_files/Services/Options/AuthorizedUsers.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedLicenseEmail' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedLicenseEmail.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedLicenseNumber' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedLicenseNumber.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedOptions.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeDismissed' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeDismissed.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeOffset' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeOffset.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeOptions.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeTimestamp' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeTimestamp.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetSettings.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWooCommerceSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWooCommerceSettings.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressDisableGuestsOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressDisableGuestsOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressDisableMobileOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressDisableMobileOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressSettings.class.php',
        'LiveChat\\Services\\Options\\Elementor\\ContactButtonWidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/ContactButtonWidgetURL.class.php',
        'LiveChat\\Services\\Options\\Elementor\\ElementorWidgetsOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/ElementorWidgetsOptions.class.php',
        'LiveChat\\Services\\Options\\Elementor\\QualityBadgeWidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/QualityBadgeWidgetURL.class.php',
        'LiveChat\\Services\\Options\\Option' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Option.class.php',
        'LiveChat\\Services\\Options\\OptionsSet' => __DIR__ . '/../..' . '/plugin_files/Services/Options/OptionsSet.class.php',
        'LiveChat\\Services\\Options\\Platform' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Platform.class.php',
        'LiveChat\\Services\\Options\\PublicKey' => __DIR__ . '/../..' . '/plugin_files/Services/Options/PublicKey.class.php',
        'LiveChat\\Services\\Options\\ReadableOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReadableOption.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeDismissed' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeDismissed.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeOffset' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeOffset.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeOptions.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeTimestamp' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeTimestamp.class.php',
        'LiveChat\\Services\\Options\\SettingsOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/SettingsOptions.class.php',
        'LiveChat\\Services\\Options\\StoreToken' => __DIR__ . '/../..' . '/plugin_files/Services/Options/StoreToken.class.php',
        'LiveChat\\Services\\Options\\Synchronized' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Synchronized.class.php',
        'LiveChat\\Services\\Options\\UserAuthOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserAuthOptions.class.php',
        'LiveChat\\Services\\Options\\UserOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserOption.class.php',
        'LiveChat\\Services\\Options\\UserToken' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserToken.class.php',
        'LiveChat\\Services\\Options\\WidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WidgetURL.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WooCommerce/WooCommerceOption.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceUserOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WooCommerce/WooCommerceUserOption.class.php',
        'LiveChat\\Services\\Options\\WritableOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WritableOption.class.php',
        'LiveChat\\Services\\PlatformProvider' => __DIR__ . '/../..' . '/plugin_files/Services/PlatformProvider.class.php',
        'LiveChat\\Services\\SettingsProvider' => __DIR__ . '/../..' . '/plugin_files/Services/SettingsProvider.class.php',
        'LiveChat\\Services\\SetupProvider' => __DIR__ . '/../..' . '/plugin_files/Services/SetupProvider.class.php',
        'LiveChat\\Services\\Store' => __DIR__ . '/../..' . '/plugin_files/Services/Store.class.php',
        'LiveChat\\Services\\TemplateParser' => __DIR__ . '/../..' . '/plugin_files/Services/TemplateParser.class.php',
        'LiveChat\\Services\\Templates\\ChatWidgetScriptTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ChatWidgetScriptTemplate.class.php',
        'LiveChat\\Services\\Templates\\ConfirmIdentityNoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ConfirmIdentityNoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\ConnectNoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ConnectNoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\CustomerTrackingTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/CustomerTrackingTemplate.class.php',
        'LiveChat\\Services\\Templates\\DeactivationModalTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/DeactivationModalTemplate.class.php',
        'LiveChat\\Services\\Templates\\NoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/NoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\ResourcesTabTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ResourcesTabTemplate.class.php',
        'LiveChat\\Services\\Templates\\SettingsTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/SettingsTemplate.class.php',
        'LiveChat\\Services\\Templates\\Template' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Template.class.php',
        'LiveChat\\Services\\Templates\\TrackingCodeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/TrackingCodeTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\ContactButtonWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/ContactButtonWidgetTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\Previews\\ContactButtonPreviewWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/Previews/ContactButtonPreviewWidgetTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\QualityBadgeWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/QualityBadgeWidgetTemplate.class.php',
        'LiveChat\\Services\\TokenValidator' => __DIR__ . '/../..' . '/plugin_files/Services/TokenValidator.class.php',
        'LiveChat\\Services\\UrlProvider' => __DIR__ . '/../..' . '/plugin_files/Services/UrlProvider.class.php',
        'LiveChat\\Services\\User' => __DIR__ . '/../..' . '/plugin_files/Services/User.class.php',
        'LiveChat\\Services\\WidgetProvider' => __DIR__ . '/../..' . '/plugin_files/Services/WidgetProvider.class.php',
        'LiveChat\\Services\\WooCommerce\\CustomerTrackingProvider' => __DIR__ . '/../..' . '/plugin_files/Services/WooCommerce/CustomerTrackingProvider.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita980f0024f3d0f5735ebe868807e9545::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita980f0024f3d0f5735ebe868807e9545::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita980f0024f3d0f5735ebe868807e9545::$classMap;

        }, null, ClassLoader::class);
    }
}
