<?php

				namespace	ChNeCegInfoplus\Gds\Domain\Model;

				class	Room	extends	\TYPO3\CMS\Extbase\DomainObject\AbstractEntity	{

								/**
									* Room Name
									*
									* @var \string
									* @validate NotEmpty
									*/
								protected	$name;

								/**
									* Room Color
									*
									* @var \string
									* @validate NotEmpty
									*/
								protected	$color;

								/**
									* Room nbchair
									*
									* @var \string
									* @validate NotEmpty
									*/
								protected	$nbchair;

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
									* Returns the Room Color
									*
									* @return \string $color
									*/
								public	function	getColor()	{
												return	$this->color;
								}

								/**
									* Sets the Room Color
									*
									* @param \string $color
									* @return void
									*/
								public	function	setColor($color)	{
												$this->color	=	$color;
								}

								/**
									* Returns the Room NbChair
									*
									* @return \string $nbchair
									*/
								public	function	getNbChair()	{
												return	$this->nbchair;
								}

								/**
									* Sets the Room NbChair
									*
									* @param \string $nbchair
									* @return void
									*/
								public	function	setNbChair($nbchair)	{
												$this->nbchair	=	$nbchair;
								}

				}

?>