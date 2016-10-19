<?php

				if	(!defined('TYPO3_MODE'))	{
								die('Access denied.');
				}
// Configuration Plugin
				\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
												'ChNeCegInfoplus.'	.	$_EXTKEY,	'gds',	'gds Room Ext\Domenico Roselli'
        
				);
				
				
				// Backend module is available only in TYPO3 7.6 or newer
if (version_compare(TYPO3_version, '7.6.0', '>=')) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'ChNeCegInfoplus.Gds',
		'web', // Section Web
		'gds', // Nom des Extension
		'',
		array(
			'Desk' => 'beindex', // MVC ( View Page ) gds/Resources/Private/Templates/Desk/Beindex.html

		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:gds/room_icon.png', // Icon BackEnd Section Web
			// fichier de langue avec le nom comme une étiquette doit être apposée sur le backend
			'labels' => 'LLL:EXT:gds/Resources/Private/Language/locallang.xlf', 
		)
	);
}
				
				/*
				 * Flexforms Configuration - ext_tables.php
				 */
				$extensionName	=	\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY); 
				$pluginSignature	=	strtolower($extensionName)	.	'_gds';
				$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature]	=	'pi_flexform'; // Configuration FlexForm
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature,	'FILE:EXT:'	.	$_EXTKEY	.	'/Configuration/FlexForms/FlexForm.xml');

				/*
				 * Chargement table tx_gds_domain_model_room
				 */
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gds_domain_model_room');
				
				/*
				 * Chargement table tx_gds_domain_model_desk
				 */
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gds_domain_model_desk');

				/*
				 * Chargement du TypoScript par extension dossier gds/Configuration/TypoScript
				 */
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,	'Configuration/TypoScript',	'Gds typoscript Extension');
?>