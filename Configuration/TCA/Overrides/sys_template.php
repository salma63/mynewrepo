<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'fluidstyled';

    /**
     * Default TypoScript for Fluidstyled
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'fluidstyled'
    );
});
