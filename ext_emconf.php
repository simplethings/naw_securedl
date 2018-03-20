<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Secure Downloads',
    'description' => '"Secure Download": Apply TYPO3 access rights to ALL file assets (PDFs, TGZs or JPGs etc. - configurable) - protect them from direct access.',
    'category' => 'fe',
    'shy' => 0,
    'version' => '1.8.4',
    'dependencies' => 'cms',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => 'modLog',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Dietrich Heise, Helmut Hummel',
    'author_email' => 'typo3-ext(at)bitmotion.de',
    'author_company' => '<a href="http://www.bitmotion.de" target="_blank">bitmotion.de</a>',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'cms' => '',
            'php' => '7.0.0-7.9.99',
            'typo3' => '7.6.0-8.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'suggests' => [
    ],
    '_md5_values_when_last_written' => ''
];
