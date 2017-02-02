<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the first quote
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// get the first quote
		$record = $this->quotes->first();

		// merge the record
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

	/**
	 * Show the top left author quote
	 */
	public function zzz()
	{
		$this->data['pagebody'] = 'justone';
		$record = $this->quotes->first();
		$this->data = array_merge($this->data, $record);
		$this->render();
	}

}
