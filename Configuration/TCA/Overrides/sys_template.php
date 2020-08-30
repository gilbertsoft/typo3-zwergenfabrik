<?php

defined('TYPO3_MODE') || die();

call_user_func(function ($extensionKey) {
    /**
     * Default TypoScript for Zwergenfabrik
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Retail',
        'Zwergenfabrik Retail'
    );

    /**
     * Default TypoScript for Zwergenfabrik B2B
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Reseller',
        'Zwergenfabrik Reseller'
    );
}, 'gszwergenfabrik');
