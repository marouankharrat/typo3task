<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'linkmonth',
    'description' => 'Extension of Link of the Month, just display one Link in Month if exist.',
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
