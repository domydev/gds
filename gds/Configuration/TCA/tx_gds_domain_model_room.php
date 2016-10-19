<?php

				if	(!defined('TYPO3_MODE'))
								die('Access denied.');
				return	array(
								'ctrl'	=>	array(
												'title'	=>	'gds Room',
												'label'	=>	'name',
												'tstamp'	=>	'tstamp',
												'crdate'	=>	'crdate',
												'cruser_id'	=>	'cruser_id',
												'searchFields' => 'uid,',
												'iconfile'	=>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gds')	.	'iconroom.gif',
												'adminOnly'	=>	1,
								),
																'interface' => array(
												'showRecordFieldList' => 'uid',
								),
								'columns'	=>	array(
												'name'	=>	array(
																'label'	=>	'Name',
																'config'	=>	array(
																				'type'	=>	'input',
																				'size'	=>	'20',
																				'eval'	=>	'trim,required'
																)
												),
												'color'	=>	array(
																'label'	=>	'Color',
																'config'	=>	array(
																				'type'	=>	'input',
																				'size'	=>	'20',
																				'eval'	=>	'trim,required'
																)
												),
												'nbchair'	=>	array(
																'label'	=>	'NbChair',
																'config'	=>	array(
																				'type'	=>	'input',
																				'size'	=>	'20',
																				'eval'	=>	'trim,required'
																)
												),
								),
								'types'	=>	array(
												'0'	=>	array('showitem'	=>	'name,color,nbchair')
								)
				);
				