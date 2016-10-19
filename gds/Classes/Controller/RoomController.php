<?php

				namespace	ChNeCegInfoplus\Gds\Controller;

				class	RoomController	extends	\TYPO3\CMS\Extbase\Mvc\Controller\ActionController	{

								/**
									* RoomRepository
									*
									* @var \ChNeCegInfoplus\Gds\Domain\Repository\RoomRepository
									* @inject
									*/
								protected	$roomRepository;

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
									* action listroomAction
									*
									* @return void
									*/
								public	function	listroomAction()	{
												$rooms	=	$this->roomRepository->findAll();
												$this->view->assign('rooms',	$rooms);
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

				}

?>