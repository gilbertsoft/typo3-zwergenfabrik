<?php

defined('TYPO3_MODE') || die();

call_user_func(function ($extensionKey) {
    /***************
     * Add default configuration
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/PageTS/All.txt">'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/UserTS/All.txt">'
    );

    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$extensionKey] =
        'EXT:' . $extensionKey . '/Configuration/RTE/Default.yaml';

    /***************
     * Add Aimeos configuration
     */
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['extDirs']['1_' . $extensionKey] =
        'EXT:' . $extensionKey . '/Resources/Private/Extensions/';

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['aimeos']['confDirs']['1_' . $extensionKey] =
        'EXT:' . $extensionKey . '/Resources/Private/Config/';
}, $_EXTKEY);
