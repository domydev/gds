<?php

				if	(!defined('TYPO3_MODE'))	{
								die('Access denied.');
				}
				\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
								'ChNeCegInfoplus.'	.	$_EXTKEY,	'gds',	array(
												'Room'	=>	'listroom,index,show,',
												'Desk'	=>	'listdesk,index,show,beindex',
								),	array(
												'Room'	=>	'listroom,index,show,',
												'Desk'	=>	'listdesk,index,show,beindex,',
								)
				);
?>