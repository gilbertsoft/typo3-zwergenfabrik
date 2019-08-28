<?php

// Backend settings
$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = getenv('TYPO3_INSTALL_TOOL_PASSWORD');

// Database settings
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_HOST');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['port'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PORT');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_USER');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PASS');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_NAME');

// Frontend settings
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageUnavailable_force'] = getenv('TYPO3_PAGEUNAVAILABLE_FORCE');

// System settings
$GLOBALS['TYPO3_CONF_VARS']['SYS']['encryptionKey'] = getenv('TYPO3_ENCRYPTION_KEY');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = getenv('TYPO3_SITENAME');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = getenv('TYPO3_TRUSTED_HOST_PATTERN');

// Include ddev default config
if (getenv('DDEV_PROJECT') && (getenv('TYPO3_PATH_WEB') !== getenv('TYPO3_PATH_ROOT'))) {
    $DDEV_CONFIG = (getenv('TYPO3_PATH_WEB') ?: PATH_site) . '/typo3conf/AdditionalConfiguration.php';
    if (file_exists($DDEV_CONFIG)) {
        require $DDEV_CONFIG;
    }
}

// Run configuration modifier for extension gscacheconfig - added on 2018-11-16T18:16:00+01:00 by Gilbertsoft\CacheConfig\Service\InstallService
if (class_exists('Gilbertsoft\CacheConfig\Extension\Configurator')) {
    \Gilbertsoft\CacheConfig\Extension\Configurator::additionalConfiguration('gscacheconfig');
}
