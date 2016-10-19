<?php

				namespace	ChNeCegInfoplus\Gds\Domain\Repository;

				class	DeskRepository	extends	\TYPO3\CMS\Extbase\Persistence\Repository	{

								/**
									* Initializes the repository.
									*
									* @return void
									*/
								public	function	initializeObject()	{
												/**
													* @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings 
													*/
												$querySettings	=	$this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
												$querySettings->setRespectStoragePage(FALSE);
												$this->setDefaultQuerySettings($querySettings);
								}

				}
				