<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Linkmonth',
        'Linklist',
        [
            \Linkmonth\Linkmonth\Controller\LinktableController::class => 'list'
        ],
        // non-cacheable actions
        [
            \Linkmonth\Linkmonth\Controller\LinktableController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    linklist {
                        iconIdentifier = linkmonth-plugin-linklist
                        title = LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_linklist.name
                        description = LLL:EXT:linkmonth/Resources/Private/Language/locallang_db.xlf:tx_linkmonth_linklist.description
                        tt_content_defValues {
                            CType = list
                            list_type = linkmonth_linklist
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
