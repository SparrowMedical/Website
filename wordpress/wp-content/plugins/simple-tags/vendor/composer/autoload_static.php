<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64aea086b704a6bf091b60f2270a7daf
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Sabre\\VObject\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PPVersionNotices\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Sabre\\VObject\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/vobject/lib',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PPVersionNotices\\' => 
        array (
            0 => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PPVersionNotices\\Module\\AdInterface' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Module/AdInterface.php',
        'PPVersionNotices\\Module\\Footer\\Module' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Module/Footer/Module.php',
        'PPVersionNotices\\Module\\MenuLink\\Module' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Module/MenuLink/Module.php',
        'PPVersionNotices\\Module\\TopNotice\\Module' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Module/TopNotice/Module.php',
        'PPVersionNotices\\ServicesProvider' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/ServicesProvider.php',
        'PPVersionNotices\\Template\\TemplateInvalidArgumentsException' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Template/TemplateInvalidArgumentsException.php',
        'PPVersionNotices\\Template\\TemplateLoader' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Template/TemplateLoader.php',
        'PPVersionNotices\\Template\\TemplateLoaderInterface' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Template/TemplateLoaderInterface.php',
        'PPVersionNotices\\Template\\TemplateNotFoundException' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/Template/TemplateNotFoundException.php',
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\Exception\\ExpectedInvokableException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
        'Pimple\\Exception\\FrozenServiceException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
        'Pimple\\Exception\\InvalidServiceIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
        'Pimple\\Exception\\UnknownIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
        'Pimple\\Psr11\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/Container.php',
        'Pimple\\Psr11\\ServiceLocator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
        'Pimple\\ServiceIterator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceIterator.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Sabre\\VObject\\Cli' => __DIR__ . '/..' . '/sabre/vobject/lib/Cli.php',
        'Sabre\\VObject\\Component' => __DIR__ . '/..' . '/sabre/vobject/lib/Component.php',
        'Sabre\\VObject\\Component\\Available' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/Available.php',
        'Sabre\\VObject\\Component\\VAlarm' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VAlarm.php',
        'Sabre\\VObject\\Component\\VAvailability' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VAvailability.php',
        'Sabre\\VObject\\Component\\VCalendar' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VCalendar.php',
        'Sabre\\VObject\\Component\\VCard' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VCard.php',
        'Sabre\\VObject\\Component\\VEvent' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VEvent.php',
        'Sabre\\VObject\\Component\\VFreeBusy' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VFreeBusy.php',
        'Sabre\\VObject\\Component\\VJournal' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VJournal.php',
        'Sabre\\VObject\\Component\\VTimeZone' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VTimeZone.php',
        'Sabre\\VObject\\Component\\VTodo' => __DIR__ . '/..' . '/sabre/vobject/lib/Component/VTodo.php',
        'Sabre\\VObject\\DateTimeParser' => __DIR__ . '/..' . '/sabre/vobject/lib/DateTimeParser.php',
        'Sabre\\VObject\\Document' => __DIR__ . '/..' . '/sabre/vobject/lib/Document.php',
        'Sabre\\VObject\\ElementList' => __DIR__ . '/..' . '/sabre/vobject/lib/ElementList.php',
        'Sabre\\VObject\\EofException' => __DIR__ . '/..' . '/sabre/vobject/lib/EofException.php',
        'Sabre\\VObject\\FreeBusyGenerator' => __DIR__ . '/..' . '/sabre/vobject/lib/FreeBusyGenerator.php',
        'Sabre\\VObject\\ITip\\Broker' => __DIR__ . '/..' . '/sabre/vobject/lib/ITip/Broker.php',
        'Sabre\\VObject\\ITip\\ITipException' => __DIR__ . '/..' . '/sabre/vobject/lib/ITip/ITipException.php',
        'Sabre\\VObject\\ITip\\Message' => __DIR__ . '/..' . '/sabre/vobject/lib/ITip/Message.php',
        'Sabre\\VObject\\ITip\\SameOrganizerForAllComponentsException' => __DIR__ . '/..' . '/sabre/vobject/lib/ITip/SameOrganizerForAllComponentsException.php',
        'Sabre\\VObject\\Node' => __DIR__ . '/..' . '/sabre/vobject/lib/Node.php',
        'Sabre\\VObject\\Parameter' => __DIR__ . '/..' . '/sabre/vobject/lib/Parameter.php',
        'Sabre\\VObject\\ParseException' => __DIR__ . '/..' . '/sabre/vobject/lib/ParseException.php',
        'Sabre\\VObject\\Parser\\Json' => __DIR__ . '/..' . '/sabre/vobject/lib/Parser/Json.php',
        'Sabre\\VObject\\Parser\\MimeDir' => __DIR__ . '/..' . '/sabre/vobject/lib/Parser/MimeDir.php',
        'Sabre\\VObject\\Parser\\Parser' => __DIR__ . '/..' . '/sabre/vobject/lib/Parser/Parser.php',
        'Sabre\\VObject\\Property' => __DIR__ . '/..' . '/sabre/vobject/lib/Property.php',
        'Sabre\\VObject\\Property\\Binary' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Binary.php',
        'Sabre\\VObject\\Property\\Boolean' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Boolean.php',
        'Sabre\\VObject\\Property\\FlatText' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/FlatText.php',
        'Sabre\\VObject\\Property\\FloatValue' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/FloatValue.php',
        'Sabre\\VObject\\Property\\ICalendar\\CalAddress' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/CalAddress.php',
        'Sabre\\VObject\\Property\\ICalendar\\Date' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/Date.php',
        'Sabre\\VObject\\Property\\ICalendar\\DateTime' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/DateTime.php',
        'Sabre\\VObject\\Property\\ICalendar\\Duration' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/Duration.php',
        'Sabre\\VObject\\Property\\ICalendar\\Period' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/Period.php',
        'Sabre\\VObject\\Property\\ICalendar\\Recur' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/ICalendar/Recur.php',
        'Sabre\\VObject\\Property\\IntegerValue' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/IntegerValue.php',
        'Sabre\\VObject\\Property\\Text' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Text.php',
        'Sabre\\VObject\\Property\\Time' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Time.php',
        'Sabre\\VObject\\Property\\Unknown' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Unknown.php',
        'Sabre\\VObject\\Property\\Uri' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/Uri.php',
        'Sabre\\VObject\\Property\\UtcOffset' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/UtcOffset.php',
        'Sabre\\VObject\\Property\\VCard\\Date' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/VCard/Date.php',
        'Sabre\\VObject\\Property\\VCard\\DateAndOrTime' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/VCard/DateAndOrTime.php',
        'Sabre\\VObject\\Property\\VCard\\DateTime' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/VCard/DateTime.php',
        'Sabre\\VObject\\Property\\VCard\\LanguageTag' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/VCard/LanguageTag.php',
        'Sabre\\VObject\\Property\\VCard\\TimeStamp' => __DIR__ . '/..' . '/sabre/vobject/lib/Property/VCard/TimeStamp.php',
        'Sabre\\VObject\\Reader' => __DIR__ . '/..' . '/sabre/vobject/lib/Reader.php',
        'Sabre\\VObject\\Recur\\EventIterator' => __DIR__ . '/..' . '/sabre/vobject/lib/Recur/EventIterator.php',
        'Sabre\\VObject\\Recur\\NoInstancesException' => __DIR__ . '/..' . '/sabre/vobject/lib/Recur/NoInstancesException.php',
        'Sabre\\VObject\\Recur\\RDateIterator' => __DIR__ . '/..' . '/sabre/vobject/lib/Recur/RDateIterator.php',
        'Sabre\\VObject\\Recur\\RRuleIterator' => __DIR__ . '/..' . '/sabre/vobject/lib/Recur/RRuleIterator.php',
        'Sabre\\VObject\\RecurrenceIterator' => __DIR__ . '/..' . '/sabre/vobject/lib/RecurrenceIterator.php',
        'Sabre\\VObject\\Splitter\\ICalendar' => __DIR__ . '/..' . '/sabre/vobject/lib/Splitter/ICalendar.php',
        'Sabre\\VObject\\Splitter\\SplitterInterface' => __DIR__ . '/..' . '/sabre/vobject/lib/Splitter/SplitterInterface.php',
        'Sabre\\VObject\\Splitter\\VCard' => __DIR__ . '/..' . '/sabre/vobject/lib/Splitter/VCard.php',
        'Sabre\\VObject\\StringUtil' => __DIR__ . '/..' . '/sabre/vobject/lib/StringUtil.php',
        'Sabre\\VObject\\TimeZoneUtil' => __DIR__ . '/..' . '/sabre/vobject/lib/TimeZoneUtil.php',
        'Sabre\\VObject\\UUIDUtil' => __DIR__ . '/..' . '/sabre/vobject/lib/UUIDUtil.php',
        'Sabre\\VObject\\VCardConverter' => __DIR__ . '/..' . '/sabre/vobject/lib/VCardConverter.php',
        'Sabre\\VObject\\Version' => __DIR__ . '/..' . '/sabre/vobject/lib/Version.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64aea086b704a6bf091b60f2270a7daf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64aea086b704a6bf091b60f2270a7daf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit64aea086b704a6bf091b60f2270a7daf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit64aea086b704a6bf091b60f2270a7daf::$classMap;

        }, null, ClassLoader::class);
    }
}
