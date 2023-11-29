<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable',
        'label' => 'link_url',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'link_url,link_text',
        'iconfile' => 'EXT:linkmonth/Resources/Public/Icons/tx_linkmonth_domain_model_linktable.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'link_url, link_text, month, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_linkmonth_domain_model_linktable',
                'foreign_table_where' => 'AND {#tx_linkmonth_domain_model_linktable}.{#pid}=###CURRENT_PID### AND {#tx_linkmonth_domain_model_linktable}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'link_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.link_url',
            'description' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.link_url.description',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        ],
        'link_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.link_text',
            'description' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.link_text.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'month' => [
            'exclude' => true,
            'label' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.month',
            'description' => 'LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_domain_model_linktable.month.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
    
    ],
];
