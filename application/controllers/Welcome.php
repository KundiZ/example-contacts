<?php

if ( ! defined('APPPATH')) exit('No direct script access allowed');

/**
 * controllers/Welcome.php
 *
 * Entry page to the webapp.
 */
class Welcome extends Application
{

	function index()
	{
		$this->data['pagebody'] = "homepage";
		$this->data['contacts'] = $this->contacts->getAll_array();
		$this->render();
	}

}
