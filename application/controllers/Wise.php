<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the lower right author quote
	 */
    public function bingo()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		
		// build the list of authors, to pass on to our view
		$record = $this->quotes->get(6);                
		
		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}
