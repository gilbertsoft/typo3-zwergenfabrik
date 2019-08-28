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
            'typo3' => '8.7.0-8.99.999',
            'gsfavicon' => '*',
            'realurl' => '2.5.0-2.99.999',
            'bootstrap_package' => '10.0.0-10.99.999',
            'static_info_tables' => '6.7.0-6.99.999',
            'go_maps_ext' => '2.6.0-2.99.999',
            'aimeos' => '19.4.0-19.99.999'
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
