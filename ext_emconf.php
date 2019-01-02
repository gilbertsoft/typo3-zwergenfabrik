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
            'typo3' => '8.7.0-8.99.99',
            'gswarranty' => '*',
            'gscacheconfig' => '*',
            'gsprotectedconfig' => '*',
            'gsfavicon' => '*',
            'realurl' => '2.3.0-2.99.99',
            'bootstrap_package' => '9.1.0-9.99.99',
            'go_maps_ext' => '2.0.0-2.99.99',
            'static_info_tables' => '6.5.1-6.99.99',
            'aimeos' => '18.0.0-18.99.99'
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
    'version' => '1.0.0',
];
