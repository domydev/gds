<?php

				if	(!defined('TYPO3_MODE'))
								die('Access denied.');
				return	array(
								'ctrl'	=>	array(
												'title'	=>	'gds Desk',
												'label'	=>	'name',
												'tstamp'	=>	'tstamp',
												'crdate'	=>	'crdate',
												'cruser_id'	=>	'cruser_id',
												'searchFields' => 'roomid,',
												'iconfile'	=>	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gds')	.	'icondesk.gif',
												'adminOnly'	=>	1,
								),
								'interface' => array(
												'showRecordFieldList' => 'roomid',
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
												'type'	=>	array(
																'label'	=>	'Type',
																'config'	=>	array(
																				'type'	=>	'input',
																				'size'	=>	'20',
																				'eval'	=>	'trim,required'
																)
												),
												'roomid' => array(
																'exclude' => 0,
																'label' => 'Status',
																'config' => array(
																'type' => 'select',
																'foreign_table' => 'tx_gds_domain_model_room',
																'maxitems' => 1
																)
												),
								),
								'types'	=>	array(
								'0'	=>	array('showitem'	=>	'name,type,roomid')
								)
							
				);
				