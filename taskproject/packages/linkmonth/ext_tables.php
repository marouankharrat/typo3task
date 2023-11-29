<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_linkmonth_domain_model_linktable', 'EXT:linkmonth/Resources/Private/Language/locallang_csh_tx_linkmonth_domain_model_linktable.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_linkmonth_domain_model_linktable');
})();
