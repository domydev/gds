<?php

				/** *************************************************************
					* Extension Manager/Repository config file for ext "gds".
					*
					* Mises à jour manuelles:
					* écriture. "title", "description", "version", "author", "author_company", "author_company"
					* ************************************************************* */

				$EM_CONF[$_EXTKEY]	=	array(
								'title'	=>	'Plug-in Gds Domenico Roselli Infoplus',
								'description'	=>	'Gds_Gestion de Room',
								'category'	=>	'plugin',
								'version'	=>	'0.2.9',
								'state'	=>	'beta',
								'uploadfolder'	=>	false,
								'createDirs'	=>	'',
								'clearcacheonload'	=>	false,
								'author'	=>	'Domenico Roselli',
								'author_email'	=>	'info@domenicoroselli.ch',
								'author_company'	=>	'www.domenicoroselli.ch',
								'constraints'	=>
								array(
												'depends'	=>
												array(
																'php'	=>	'5.3.7-0.0.0',
																'typo3'	=>	'6.0.0-7.9.99',
												),
												'conflicts'	=>
												array(
												),
												'suggests'	=>
												array(
												),
								),
				);

				