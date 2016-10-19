<?php

				namespace	ChNeCegInfoplus\Gds\Domain\Model;

				class	Desk	extends	\TYPO3\CMS\Extbase\DomainObject\AbstractEntity	{

								/**
									* Desk Name
									*
									* @var \string
									* @validate NotEmpty
									*/
								protected	$name;

								/**
									* Desk Type
									*
									* @var \string
									* @validate NotEmpty
									*/
								protected	$type;

								/**
									* An empty constructor - fill it as you like
									*
									*/
								public	function	__construct()	{
												
								}

								/**
									* Returns the name
									*
									* @return \string $name
									*/
								public	function	getName()	{
												return	$this->name;
								}

								/**
									* Sets the name
									*
									* @param \string $name
									* @return void
									*/
								public	function	setName($name)	{
												$this->name	=	$name;
								}

								/**
									* Returns the Desk type
									*
									* @return \string $type
									*/
								public	function	getType()	{
												return	$this->type;
								}

								/**
									* Sets the De type
									*
									* @param \string $type
									* @return void
									*/
								public	function	setType($type)	{
												$this->type	=	$type;
								}					
				}

?>