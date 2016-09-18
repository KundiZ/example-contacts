<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contacts table.
 */
class Contacts extends MY_Model
{

	// Constructor
	function __construct()
	{
		parent::__construct();
		$this->setTable('contacts', 'ID');
	}

}
