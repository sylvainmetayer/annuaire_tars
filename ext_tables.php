<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TARS.' . $_EXTKEY,
	'Pi1',
	'list_and_show_contact'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TARS.' . $_EXTKEY,
	'Pi2',
	'list_and_show_organisme'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi2';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi2.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TARS.' . $_EXTKEY,
	'Pi3',
	'list_show_and_search_contact'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi3';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi3.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Annuaire_TARS');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairetars_domain_model_contact', 'EXT:annuaire_tars/Resources/Private/Language/locallang_csh_tx_annuairetars_domain_model_contact.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairetars_domain_model_contact');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairetars_domain_model_organisme', 'EXT:annuaire_tars/Resources/Private/Language/locallang_csh_tx_annuairetars_domain_model_organisme.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairetars_domain_model_organisme');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairetars_domain_model_fonction', 'EXT:annuaire_tars/Resources/Private/Language/locallang_csh_tx_annuairetars_domain_model_fonction.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairetars_domain_model_fonction');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairetars_domain_model_service', 'EXT:annuaire_tars/Resources/Private/Language/locallang_csh_tx_annuairetars_domain_model_service.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairetars_domain_model_service');
