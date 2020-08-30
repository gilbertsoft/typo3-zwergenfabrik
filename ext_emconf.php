<?php

/**
 * Extension Manager/Repository config file for ext "zwergenfabrik".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage Zwergenfabrik',
    'description' => 'Sitepackage Zwergenfabrik - Aimeos based Webshop',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'aimeos' => '18.0.0-18.99.99',
            'bootstrap_package' => '9.1.0-9.99.99',
            'gsfavicon' => '*',
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gilbertsoft\\Zwergenfabrik\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Simon Gilli',
    'author_email' => 'typo3@gilbertsoft.org',
    'author_company' => 'Gilbertsoft',
    'version' => '1.2.0',
];
