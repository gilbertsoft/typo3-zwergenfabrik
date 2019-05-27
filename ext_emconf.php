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
            'typo3' => '9.5.0-9.5.99',
            'gswarranty' => '*',
            'gscacheconfig' => '*',
            'gsprotectedconfig' => '*',
            'gsfavicon' => '*',
            'bootstrap_package' => '10.0.0-10.99.99',
            'go_maps_ext' => '3.1.0-3.99.99',
            'aimeos' => '19.4.0-19.99.99'
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
    'version' => '2.0.0',
];
