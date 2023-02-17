<?php

/**
 * Extension Manager/Repository config file for ext "fluidstyled".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'fluidstyled',
    'description' => 'New content',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Soft2do\\Fluidstyled\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Soft2do',
    'author_email' => 'devloppeur@gmail.com',
    'author_company' => 'Soft2do',
    'version' => '1.0.0',
];
