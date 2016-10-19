<?php

				namespace	ChNeCegInfoplus\Gds\Controller;

				class	DeskController	extends	\TYPO3\CMS\Extbase\Mvc\Controller\ActionController	{

								/**
									* RoomRepository
									*
									* @var \ChNeCegInfoplus\Gds\Domain\Repository\DeskRepository
									* @inject
									*/
								protected	$deskRepository;

								/**
									* Initializes the current action
									*
									* @return void
									*/
								public	function	initializeAction()	{
												
								}

								/**
									* Index action for this controller.
									*
									* @return string The rendered view
									*/
								public	function	indexAction()	{
												$GNU_Auteur	=	'CC: Domenico Roselli';
												$this->view->assign('v_license',	$GNU_Auteur);
												// The syntax
								}

								/**
									* Index action for this controller.
									*
									* @return string The rendered view
									*/
								public	function	showAction()	{
												
								}

								/**
									* action listdeskAction
									*
									* @return void
									*/
								public	function	listdeskAction()	{
												$desks	=	$this->deskRepository->findAll();
												$this->view->assign('desks',	$desks);
												// retourner des valeurs de flexform

												//  Return v_xml_section Config FlexForm
												$Return_v_page	=	$this->settings['pageSelector'];
												$this->view->assign('v_page',	$Return_v_page);
												

												//  Return v_xml_section Config FlexForm
												$Return_v_header	=	$this->settings['header'];
												$this->view->assign('v_header',	$Return_v_header);

												//  Return v_xml_section Config FlexForm
												$Return_v_message	=	$this->settings['message'];
												$this->view->assign('v_message',	$Return_v_message);
												

												//  Return v_xml_section Config FlexForm
												$Return_v_xml	=	$this->settings['v_xml_section'];
												$this->view->assign('v_xml_section',	$Return_v_xml);
								}
								
																/**
									* Index action for this controller.
									*
									* @return string The rendered view
									*/
								public	function	beindexAction()	{
												$GNU_Auteur	=	'CC: Domenico Roselli BE Module';
												$this->view->assign('v_license_be',	$GNU_Auteur);
												// The syntax
								}

				}

?>