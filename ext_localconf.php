<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'AM307.' . $_EXTKEY,
    'List',
    array('Inventory' => 'list')
);
