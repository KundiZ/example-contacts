<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 */
class Application extends CI_Controller
{

	protected $data = array ();   // parameters for view components
	protected $id; // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */
	function __construct()
	{
		parent::__construct();
		$this->data = array ();
		$this->data['title'] = 'Demo Contact Manager';
	}

	/**
	 * Render this page
	 */
	function render()
	{
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$this->data['data'] = &$this->data;
		$this->parser->parse('_template', $this->data);
	}

}
