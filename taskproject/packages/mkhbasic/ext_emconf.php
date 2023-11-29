<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'mkhbasic',
    'description' => 'Basic Extension by MKh',
    'category' => 'plugin',
    'author' => 'Marouan Kharrat',
    'author_email' => 'kharrat_marouan.info@yahoo.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
